<?php
namespace App\Repositories\Eloquent;
use App\Models\CoSoCc;
use App\Repositories\Contracts\CoSoCcRepositoryInterface;

class CoSoCcRepository implements CoSoCcRepositoryInterface {
    private $coSoCc;
    public function __construct()
    {
        $this->coSoCc=new CoSoCc();
    }
    public function getLst($columns=array('*'))
    {
        $ds=$this->coSoCc->get($columns);
        return $ds;
    }
    public function addNew(array $data)
    {
        $arr=$this->coSoCc->create($data);
        return $arr;
    }
    public function getById($id)
    {
        $data=$this->coSoCc->find($id);
        if($data)
            return $data;
        return null;
    }
    public function remove($id)
    {
        $data=$this->getById($id);
        if($data!=null)
        {
            $data->delete();
            return true;
        }
        return false;
    }
    public function edit($id,array $arr)
    {
        $data=$this->getById($id);
        if($data) {
            $data=$data->getFillable();
            foreach ($data as $key)
            {
                if(array_key_exists($key,$arr))
                    $data->$key=$arr[$key];
            }
            if($data->save())
                return true;
            else
                return false;
        }
        else{
            return false;
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CoSoCcRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $cscc;
    public function __construct(CoSoCcRepositoryInterface $coSoCcRepository)
    {
       $this->cscc=$coSoCcRepository;
    }

    public function index($id='')
    {
      $view=[];
      $list=$this->cscc->getLst();
      $view['id']=$id;

      if($id=='')
      {
          $view['data']=$list;
          return view('admin.co_so_cc.pageName_list',$view);
      }
      else
      {
          $view['data']=$this->cscc->getById($id);
          return view('admin.co_so_cc.pageName_list',$view);
      }

    }
    public function save(Request $request)
    {
        $data=$request->all();
        $this->cscc->addNew($data);
        return redirect()->to(route('admin.co_so_cc.pageName_list'));
    }
    public function del($id)
    {
        $this->cscc->remove($id);
        return redirect()->to(route('admin.co_so_cc.pageName_list'));
    }

    public function update(Request $request,$id)
    {
        $data=$request->all();
        $this->cscc->edit($id,$data);
        return redirect()->to(route('admin.co_so_cc.pageName_list'));
    }

}

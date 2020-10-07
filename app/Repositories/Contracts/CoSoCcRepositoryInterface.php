<?php
namespace App\Repositories\Contracts;
interface CoSoCcRepositoryInterface{
    public function getLst($columns=array('*'));
    public function addNew(array $data);
    public function getById($id);
    public function remove($id);
    public function edit($id,array $arr);
}

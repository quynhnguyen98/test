<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoSoCc extends Model
{
    protected $table='co_so_cc';
    protected $fillable=['id','ten','sdt','dia_chi'];
    public $timestamps=false;
}

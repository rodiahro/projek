<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cardata extends Model
{
  
protected $dates = ['created_at'];

protected $table = "Cardata";

public $timestamps = false;

public $incrementing = false;

protected $fillable = ['id_car','carname','price','stok'];

protected $primaryKey = 'id_car';


}


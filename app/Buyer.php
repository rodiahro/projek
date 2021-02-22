<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buyer extends Model
{
  
protected $dates = ['created_at'];

protected $table = "buyer";

public $timestamps = false;

public $incrementing = false;

protected $fillable = ['id_buyer','name','email','no_telp','car_type'];

protected $primaryKey = 'id_buyer';


}


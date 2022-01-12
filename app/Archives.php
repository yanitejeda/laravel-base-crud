<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archives extends Model
{
    protected $table="Archives";

    protected $fillable = [
        'title','description','thumb','price','series','sale_date','type'
    ];
    //
}

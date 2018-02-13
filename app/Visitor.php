<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['name','type', 'idNumber', 'mobile', 'email', 'visitees', 'purpose','vimage','indoor','depTime'];

}

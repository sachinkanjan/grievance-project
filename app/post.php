<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   protected $table = 'grievances';

   public $primaryKey ='id';
   public $timestamp ='true';
}

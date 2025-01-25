<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    public function category1()
 {
 return $this->belongsTo('App\Models\mmfood');
 }
 public function category2()
 {
 return $this->belongsTo('App\Models\kfood');
 }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

   protected $attributes = [
     'name' => 'Anoter default book',
     'description' =>  'sdfss',
     'active' => false,
   ];

    // company  - one2many
   public function company(){
       return $this->belongsTo(Company::class);
   }

    // products - many2many
   public function products(){
       return $this->hasMany(Products::class);
   }

    public function location(){
        return $this->hasOne(Location::class);
    }

    // sectors -  many2manyphp
    public function sectors(){
        return $this->hasMany(Sector::class);
    }












    // location - one2one


}

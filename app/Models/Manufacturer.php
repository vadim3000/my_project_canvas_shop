<?php

namespace App\Models;

use App\Models\LoggableInterface;
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

    protected $fillable = [
        'name',
        'description',
        'active',
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

    public function toArray(): array
    {
        return parent::toArray();
    }

    public function toString(): string
    {
        return 'Article with id' . $this->id;
    }









    // location - one2one


}

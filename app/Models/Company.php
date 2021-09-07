<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // company  - one2many
    public function manufacturers(){
        return $this->hasMany(Manufacturer::class);
    }
}

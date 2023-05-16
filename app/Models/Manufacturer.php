<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function carmodels(){
        return $this->hasMany(Carmodel::class);
    }
}

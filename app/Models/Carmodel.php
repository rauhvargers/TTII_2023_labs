<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\solarSystem;

class solarSystem extends Model
{
    public function planets()
    {
        return $this->hasMany(Planet::class);
    } 
}

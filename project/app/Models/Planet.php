<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Planet;

class Planet extends Model
{
    public function solar_system()
    {
        return $this->belongsTo(solarSystem::class);
    }
}

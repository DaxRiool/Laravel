<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;
use App\Models\solarSystem;

class SolarSystemController extends Controller
{
    public $filter;
    
    public function showsolar($filter)
    {
        $planets = solarSystem::withCount('planets')->get();
        
        $collection = collect($planets);
        

        $planeet = $collection->where("id", $filter)->first();
        
        return view("solar", ['filter' => $planeet]);
    }

    public function indexsolar()
    {
        $planets = solarSystem::withCount('planets')->get();
        
        $collection = collect($planets);

        
        return view("solar", ['systems' => $collection]);
    }
}


    

?>    


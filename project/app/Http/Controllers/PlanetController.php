<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;
use App\Models\solarSystem;

class PlanetController extends Controller
{
    public $filter;
    
    public function show($filter)
    {
        $planets = Planet::with('solar_system')->get()   ;
        
        $collection = collect($planets);
        
        $filter = ucfirst($filter);
;

        $planeet = $collection->where("name", $filter)->first();
        
        
        return view("welcome", ['filter' => $planeet]);
    }

    public function index()
    {
        $planets = Planet::with('solar_system')->get()   ;
        
        $collection = collect($planets);
        
        return view("welcome", ['planets' => $collection]);
    }
}

    

?>    


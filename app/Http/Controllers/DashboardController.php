<?php

namespace App\Http\Controllers;
use App\Models\Busroute;
use App\Models\Bus;
use App\Models\BusSchedule;

use Illuminate\Http\Request;
use Inertia\Inertia;


class DashboardController extends Controller
{
    /*public function index()
    {

        $busroutes = Busroute::all();
        $bus = Bus::all();
        $busschedule = BusSchedule::all();
        
       // dd($busroutes);
        //dd($busschedule);
       // dd($bus);


        return Inertia::render('Dashboard',[
            'busroutes' => $busroutes,//Get Bus Routes // PASSED TO DEFINE PROPS
            'bus' => $bus,
            'busschedule' => $busschedule
        ]);
    }*/
}

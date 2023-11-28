<?php

namespace App\Http\Controllers;

use App\Models\Busroute;
use App\Http\Requests\UpdateBusrouteRequest;
use App\Models\Location;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class BusrouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $busroutes = Busroute::all();
        return Inertia::render('Busroutes/List',[
            'busroutes' => $busroutes //Get Bus Routes // PASSED TO DEFINE PROPS
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations=Location::all();
        return Inertia::render('Busroutes/Create',['locations'=>$locations]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validator = validator(Request::all(), [
            'origin' => 'required',
            'destination' => [
                'required',
                Rule::unique('bus_routes')->where(function ($query) {
                    return $query->where('origin', Request::get('origin'))
                                 ->where('destination', Request::get('destination'));
                }),
            ],
        ]);
    
        if ($validator->fails()) {
            // Validation failed, return with errors
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Busroute::create([
            'origin' => Request::get('origin'),
            'destination' => Request::get('destination'),
        ]);

        return to_route('busroutes')->with('success', 'New Route created.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Busroute $busroute)
    {
        $id=Request::get("id");
        $busroute= Busroute::find($id);
        $locations= Location::all();
        return Inertia::render('Busroutes/Edit',['busroute'=>$busroute,'locations'=>$locations]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Busroute $busroute)
    {
        Request::validate([
            'origin' => 'required',
            'destination' => 'required',
        ]);

        Busroute::where('id',$busroute->id)
        ->update([
            'origin' =>Request::get('origin'),
            'destination' => Request::get('destination')
        ]);
        return to_route('busroutes')->with('success', 'Route  edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Busroute $busroute)
    {
        Busroute::destroy($busroute->id);
        to_route('busroutes');
    }
}

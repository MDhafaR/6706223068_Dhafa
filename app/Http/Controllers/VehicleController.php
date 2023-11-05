<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Muhammad Dhafa Ramadhani - 6706223068 - 4604
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = DB::table('vehicles as v')
        ->select(
        'v.id as id',
        'v.name as name',
        't.name as type',
        'v.license as license',
        'v.dailyprice as dailyprice',
        )
        ->join('types as t', 'v.typeId', '=', 't.id')
        ->orderBy('v.name', 'asc')
        ->get();
        return view("kendaraan.daftarKendaraan", compact("vehicles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}

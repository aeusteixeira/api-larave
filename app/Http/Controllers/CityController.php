<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::with('state')->get();
        return CityResource::collection($cities);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = City::create($request->all());
        return CityResource::make($city);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city = City::with('state')->findOrFail($id);
        return CityResource::make($city);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = City::findOrFail($id);
        $city->update($request->all());
        return CityResource::make($city);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return response()->json(null, 204);
    }
}

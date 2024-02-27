<?php

namespace App\Http\Controllers;

use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::all();
        return StateResource::collection($states);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $state = State::create($request->all());
        return StateResource::make($state);
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        return StateResource::make($state);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $state->update($request->all());
        return StateResource::make($state);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();
        return response()->json(null, 204);
    }
}

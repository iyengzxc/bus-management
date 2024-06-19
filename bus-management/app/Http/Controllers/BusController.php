<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
{
    $buses = Bus::all();
    return view('buses.index', compact('buses'));
}

public function create()
{
    return view('buses.create');
}

public function store(Request $request)
{
    $request->validate([
        'license_plate' => 'required',
        'model' => 'required',
        'capacity' => 'required|integer',
    ]);
    

    Bus::create($request->all());
    return redirect()->route('buses.index')
        ->with('success', 'Bus created successfully.');
}

public function edit(Bus $bus)
{
    return view('buses.edit', compact('bus'));
}

public function update(Request $request, Bus $bus)
{
    $request->validate([
        'license_plate' => 'required',
        'model' => 'required',
        'capacity' => 'required|integer',
    ]);

    $bus->update($request->all());
    return redirect()->route('buses.index')
        ->with('success', 'Bus updated successfully');
}

public function destroy(Bus $bus)
{
    $bus->delete();
    return redirect()->route('buses.index')
        ->with('success', 'Bus deleted successfully');
}

}
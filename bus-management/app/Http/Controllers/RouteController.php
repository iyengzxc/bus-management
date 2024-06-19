<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }

    public function create()
    {
        return view('routes.create');
    }

    public function store(Request $request)
    {
        $route = new Route;
        $route->start_location = $request->start_location;
        $route->end_location = $request->end_location;
        $route->save();

        return redirect()->route('routes.index');
    }

    public function edit($id)
    {
        $route = Route::findOrFail($id);
        return view('routes.edit', compact('route'));
    }

    public function update(Request $request, $id)
    {
        $route = Route::findOrFail($id);
        $route->start_location = $request->start_location;
        $route->end_location = $request->end_location;
        $route->save();

        return redirect()->route('routes.index');
    }

    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('routes.index');
    }
}

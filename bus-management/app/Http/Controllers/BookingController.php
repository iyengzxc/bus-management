<?php

// app/Http/Controllers/BookingController.php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'schedule'])->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $users = User::all();
        $schedules = Schedule::all();
        return view('bookings.create', compact('users', 'schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'schedule_id' => 'required|exists:schedules,id',
            'seat_number' => 'required|integer',
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $users = User::all();
        $schedules = Schedule::all();
        return view('bookings.edit', compact('booking', 'users', 'schedules'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'schedule_id' => 'required|exists:schedules,id',
            'seat_number' => 'required|integer',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}

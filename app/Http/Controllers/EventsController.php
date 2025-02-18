<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    // Display a listing of events.
    public function index()
    {
        $events = Events::all();
        return view('events.index', compact('events'));
    }

    // Show the form for creating a new event.
    public function create()
    {
        return view('events.create');
    }

    // Store a newly created event in storage.
    public function store(Request $request)
    {
        $data = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required|date',
            'event_location' => 'required|string|max:255',
            'event_image' => 'required|string|max:255', // adjust if handling file uploads
        ]);
        Events::create($data);
        return redirect()->route('events.index');
    }

    // Display the specified event.
    public function show(Events $event)
    {
        return view('events.show', compact('event'));
    }

    // Show the form for editing the specified event.
    public function edit(Events $event)
    {
        return view('events.edit', compact('event'));
    }

    // Update the specified event in storage.
    public function update(Request $request, Events $event)
    {
        $data = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required|date',
            'event_location' => 'required|string|max:255',
            'event_image' => 'required|string|max:255',
        ]);
        $event->update($data);
        return redirect()->route('events.index');
    }

    // Remove the specified event from storage.
    public function destroy(Events $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}

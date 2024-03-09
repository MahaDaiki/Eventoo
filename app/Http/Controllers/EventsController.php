<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $user = Auth::user();
        $categories = Categories::all();
$organizerId = $user->organizer->id;
$events = $user->organizer->events;
        return view('organizerevents', compact('categories','events'));
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
    $user = Auth::user()->organizer;

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'media' => 'required',
        'category_id' => 'required',
        'description' =>'required',
        'location' =>'required|string|max:255',
        'time' => 'required|after:today', 
        'duration' => 'required',
        'disponible_tickets' => 'required|integer|min:1',
        'is_automatic' => 'required',
    ]);

    $validatedData['organizer_id'] = $user->id;

    $event = Event::create($validatedData);

    if ($request->hasFile('media')) {
        $file = $request->file('media');

        $storedFile = $file->store('uploads');

        $media = $event->addMedia(storage_path('app/' . $storedFile))->toMediaCollection();

        $event->id_media = $media->id;
        $event->save();
    }

    return redirect()->back()->with('success', 'Event created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
    $categories = Categories::all();  

    return view('editevent', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $eventId)
{
    $user = Auth::user()->organizer;

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'media' => 'sometimes', 
        'category_id' => 'required',
        'description' =>'required',
        'location' =>'required|string|max:255',
        'time' => 'required|after:today', 
        'duration' => 'required',
        'disponible_tickets' => 'required|integer|min:1',
        'is_automatic' => 'required',
    ]);

    $validatedData['organizer_id'] = $user->id;

    $event = Event::findOrFail($eventId);
    $event->update($validatedData);

    if ($request->hasFile('media')) {
        $file = $request->file('media');

        $storedFile = $file->store('uploads');
        if ($event->media) {
            $event->media->delete();
        }
        $media = $event->addMedia(storage_path('app/' . $storedFile))->toMediaCollection();
        $event->id_media = $media->id;
        $event->save();
    }

    return redirect('organizerEvents')->with('success', 'Event updated successfully');
}

    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
    
        return redirect()->back()->with('success', 'Event deleted successfully');
}
}

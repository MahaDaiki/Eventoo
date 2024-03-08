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
    {
        $categories = Categories::all();
        return view('organizerevents', compact('categories'));
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
    $user = Auth::user();

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'media' => 'required',
        'category_id' => 'required',
        'description' =>'required',
        'location' =>'required|string|max:255',
        'time' => 'required|date_format:H:i', 
        'duration' => 'required',
        'disponible_tickets' => 'required|integer|min:1',
        'is_automatic' => 'boolean',
    ]);

    $validatedData['organizer_id'] = $user->organizer->id;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

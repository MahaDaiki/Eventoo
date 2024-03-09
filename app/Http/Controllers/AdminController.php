<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Clients;
use App\Models\Event;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('is_valid', 0)
        ->whereNull('deleted_at')
        ->get();
// dd($events);
        $clients = Clients::paginate(5);
        $categories = Categories::paginate(5);
        return view('adminDashboard', compact('categories','events','clients'));
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
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
  
        $event->update(['is_valid' => 1]);
    
        return redirect()->back()->with('success', 'Event marked as valid');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $client)
    {
        $client->user()->delete();
        $client->delete();

        return redirect()->back()->with('success', 'Client access restricted');
    }
}

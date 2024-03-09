<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Event;
use App\Models\Organizers;
use Illuminate\Http\Request;


class StatistiqueController extends Controller
{
    public function AdminStats(){

        $clientCount = Clients::count();
        $organizerCount = Organizers::count();
        $eventCount = Event::count();

        $eventReservations = Event::withCount('reservations')->get();

        $eventCategories = Event::with('categories')->get();

        return view('statistics.index', compact('clientCount', 'organizerCount', 'eventCount', 'eventReservations', 'eventCategories'));
    }
}

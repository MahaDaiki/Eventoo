<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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

        $reservationCount = Event::withCount('reservations')->get();

        $categoriesInEvents = Event::with('category')->get();
        $categories = Categories::all();
        return view('adminstats', compact('clientCount', 'organizerCount', 'eventCount', 'reservationCount', 'categoriesInEvents','categories'));
    }
}

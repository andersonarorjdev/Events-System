<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index(){

        $events = Event::all();
        return view('events.list', ['events' => $events]);
    }

    public function store(){
        return view('events.create');
    }
}

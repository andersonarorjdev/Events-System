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

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        //Instance from Event Model
        $event = new Event;


        //The Model receives datas from form
        $event->title = $request->title;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->category = $request->category;

        $event->save();

        return redirect('/');
    }
}

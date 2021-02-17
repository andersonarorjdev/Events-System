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

        //Verify if user sends a image to upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);   

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento Criado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\User;

class EventsController extends Controller
{
    public function index(){

        $events = Event::all();
        return view('events.list', ['events' => $events]);
    }

    public function search(){
        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
            $eventsCount = count($events);
            return view('index',['events' => $events, 'search' => $search, 'eventsCount' => $eventsCount]);

        }else{
            $events = Event::all();    
        }
        
        return view('index',['events' => $events, 'search' => $search]);
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
        $event->date = $request->date;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->category = $request->category;
        $event->items = $request->items;

        //Verify if user sends a image to upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);   

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento Criado com sucesso!');
    }

    public function show($id){
            $event = Event::findOrFail($id);
            $user_id = User::where('id', $event->user_id)->first()->toArray();
            return view('events.show', ['event' => $event, 'user' => $user_id]);
    }

    public function about(){
        return view('events.about');
    }

    public function contact(){
        return view('events.contact');
    }
}

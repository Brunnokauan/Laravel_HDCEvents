<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        
        $events = Event::all();

        return view('welcome',['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $resquest) {
        
        $event = new Event;

        $event->title = $resquest->title;
        $event->city = $resquest->city;
        $event->private = $resquest->private;
        $event->description = $resquest->description;

        $event->save();

        return redirect('/');
    }
}

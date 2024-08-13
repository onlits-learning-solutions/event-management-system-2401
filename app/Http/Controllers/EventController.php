<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event/index', ['events' => $events]);
    }

    public function create()
    {
        return view('event/create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->name;
        $event->date = $request->date;
        $event->type = $request->type;
        $event->organiser = $request->organiser;
        $event->save();
        return redirect('/events');
    }

    public function show(int $id)
    {
        $event = Event::find($id);
        return view('event/show',['event' => $event]);
    }

    public function edit()
    {
        return view('event/edit');
    }

    public function update() {}

    public function destroy() {}
}

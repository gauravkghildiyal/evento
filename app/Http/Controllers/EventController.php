<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return $events;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("events.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);

        $event = new Event();
        $event->name = $request->name;
        $event->location = $request->location;
        $event->details = $request->details;
        $event->date = $request->date;

        auth()->user()->organisedEvents()->save($event);
        return redirect()->route("presenters.create",["event_id"=>$event->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {

        return view("events.show",compact(["event"]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }

    public function visitEvent($event_id){
        $event = Event::find($event_id);
        $user_id = auth()->user()->id;
        if($event->visitors()->where("user_id",$user_id)->count() == 0){
            $event->visitors()->attach(auth()->user()->id);
        }
        return redirect()->back();
    }

    public function unvisitEvent($event_id){
        $event = Event::find($event_id);
        $user_id = auth()->user()->id;
        if($event->visitors()->where("user_id",$user_id)->count() == 1){
            $event->visitors()->detach($user_id);
        }
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class PresenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($event_id)
    {
        $event = Event::find($event_id);
        return $event->presenters;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($event_id)
    {
        $event = Event::find($event_id);
        if($event->organiser->id != auth()->user()->id){
            return redirect()->route("events.index");
        }
        $users = User::all();
        return view("presenters.create",compact(["event","users"]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$event_id)
    {
        $event = Event::find($event_id);
        if($event->organiser->id != auth()->user()->id){
            return redirect()->route("events.index");
        }
        if($event->presenters()->where("user_id",$request->presenter)->count() == 0){
            $event->presenters()->attach($request->presenter);
        }
        return redirect()->route("presenters.create",['event_id'=>$event_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id,$presenter)
    {
        $event = Event::find($event_id);
        if($event->organiser->id != auth()->user()->id){
            return redirect()->route("events.index");
        }
        if($event->presenters()->where("user_id",$presenter)->count() == 1){
            $event->presenters()->detach($presenter);
        }
        return redirect()->route("presenters.create",['event_id'=>$event_id]);

    }
}

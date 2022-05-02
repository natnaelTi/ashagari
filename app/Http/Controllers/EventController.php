<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        $events = Event::all()->orderBy('end_date', 'desc')->paginate(15);
        
        return view('cms.events.list', [
            'events' => $events
        ]);
    }

    public function create()
    {
        return view('cms.events.create');
    }

    public function store(Request $request)
    {
        $i_event = $request->validate([
            'title' => ['required', 'unique:events', 'max:120'],
            'description' => ['max:300'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'reg_end' => ['required', 'date'],
            'seats' => ['numeric'],
            'location' => ['required']
        ]);

        $event = new Event();
        $event->title = $i_event['title'];
        if($request->has('description')){
            $event->description = $i_event['description'];
        }
        $event->start_date = $i_event['start_date'];
        $event->end_date = $i_event['end_date'];
        $event->reg_end = $i_event['reg_end'];
        if($request->has('seats')){
            $event->seats = $i_event['seats'];
        }
        $event->location = $i_event['location'];

        if($request->has('filepath')){
            $fp = $i_event['title'] . '.' . 'poster' . '.' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path("events/{{$i_event['title']}}"), $fp);
            $event->filepath = $fp;
        }
        $stat = $event->save();

        if($stat){
            return redirect()->route('list_events')->with('success', 'Event has been successfully recorded.');
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Event failed to be recorded']);
        }
    }

    public function edit($id)
    {
        $event = Event::find($id);
        if($event){
            return view('cms.events.create', [
                'event' => $event
            ]);
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }

    public function update(Request $request, $id)
    {
        $i_event = $request->validate([
            'title' => ['required', 'unique:events', 'max:120'],
            'description' => ['max:300'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'reg_end' => ['required', 'date'],
            'seats' => ['numeric'],
            'location' => ['required']
        ]);

        $event = Event::find($id);
        if($event){
            $event->title = $i_event['title'];
            if($request->has('description')){
                $event->description = $i_event['description'];
            }
            $event->start_date = $i_event['start_date'];
            $event->end_date = $i_event['end_date'];
            $event->reg_end = $i_event['reg_end'];
            if($request->has('seats')){
                $event->seats = $i_event['seats'];
            }
            $event->location = $i_event['location'];

            if($request->has('filepath')){
                $fp = $i_event['title'] . '.' . 'poster' . '.' . time() . '.' . $request->filepath->extension();
                $request->filepath->move(public_path("events/{{$i_event['title']}}"), $fp);
                $event->filepath = $fp;
            }
            $stat = $event->save();

            if($stat){
                return redirect()->route('list_events')->with('success', 'Event has been successfully updated.');
            }
            else{
                return redirect()->back()->with('errors', ['Process Aborted', 'Event failed to be updated']);
            }
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if($event){
            $event->delete();
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }
}

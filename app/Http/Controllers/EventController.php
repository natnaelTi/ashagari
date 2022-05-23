<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Support\Facades\Route;

class EventController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'list']);
    }

    //

    public function list()
    {
        $l_event = Event::latest()->orderBy('start_date', 'desc')->first();
        $events = Event::latest()->orderBy('end_date', 'desc')->paginate(15);

        return view('guest.event', ['events' => $events, 'l_event' => $l_event]);
    }

    public function index()
    {
        $events = Event::latest()->orderBy('end_date', 'desc')->paginate(15);

        return view('cms.event.list', [
            'events' => $events
        ]);
    }

    public function create()
    {
        return view('cms.event.create');
    }

    public function store(Request $request)
    {
        $i_event = $request->validate([
            'title' => ['required', 'unique:events', 'max:120'],
            'description' => ['max:750'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'reg_end' => ['required', 'date'],
            'location' => ['required']
        ]);

        $event = new Event();
        $event->title = $i_event['title'];

        if($request->has('description') && $request->input('description') != null){
            $event->description = $i_event['description'];
        }
        else{
            $event->description = 'No further details provided for this event.';
        }

        $event->start_date = $i_event['start_date'];
        $event->end_date = $i_event['end_date'];
        $event->reg_end = $i_event['reg_end'];

        if($request->has('seats') && $request->input('seats') != null){
            $event->seats = $request->input('seats');
        }

        $event->location = $i_event['location'];

        if($request->has('filepath') && $request->input('filepath') != null){
            $fp = $request->input('title') . '.' . 'poster' . '.' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path("events/{$request->input('title')}"), $fp);
            $event->filepath = $fp;
        }

        if($request->has('price') && $request->input('price') != null){
            $event->price = $request->input('price');
        }
// dd($event);
        $stat = $event->save();

        if($stat){
            return redirect()->route('cms_list_events')->with('success', 'Event has been successfully recorded.');
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Event failed to be recorded']);
        }
    }

    public function show($id)
    {
        $event = Event::find($id);

        if($event){
            if(Auth::check()){
                return view('cms.events.show', [
                    'event' => $event
                ]);
            }
            else{
                return view('guest.events.show', [
                    'event' => $event
                ]);
            }
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for does not seem to be in record.']);
        }
    }

    public function edit($id)
    {
        $event = Event::find($id);

        if($event){
            return view('cms.event.create', [
                'event' => $event,
                'route' => route('cms_update_event', [$event->id])
            ]);
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for does not seem to be in record.']);
        }
    }

    public function update(Request $request, $id)
    {
        $i_event = $request->validate([
            'title' => ['required', 'max:120'],
            'description' => ['max:750'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'reg_end' => ['required', 'date'],
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
                $event->seats = $request->input('seats');
            }

            $event->location = $i_event['location'];

            if($request->has('filepath')){
                $fp = $request->input('title') . '.' . 'poster' . '.' . time() . '.' . $request->filepath->extension();
                $request->filepath->move(public_path("events/{$request->input('title')}"), $fp);
                $event->filepath = $fp;
            }

            if($request->has('price')){
                $event->price = $request->input('price');
            }

            $stat = $event->save();

            if($stat){
                return redirect()->route('cms_list_events')->with('success', 'Event has been successfully updated.');
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
            $attendees = Attendee::where('event_id', $event->id)->get();
            $event->delete();
            return redirect()->back()->with('success', 'Event has been successfully removed.');
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }
}

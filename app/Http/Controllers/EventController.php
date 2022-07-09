<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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
        $events = Event::where('end_date', '<=', Carbon::now())->orderBy('end_date', 'desc')->get();
        $u_events = Event::where('reg_end', '>=', Carbon::now())->orderBy('reg_end', 'asc')->get();
        $new = false;
        if(count($u_events) > 0){
            $new = true;
        }
        return view('guest.pe', ['pes' => $events, 'new' => $new]);
    }

    public function index()
    {
        $events = Event::latest()->orderBy('end_date', 'desc')->paginate(15);
        $today = Carbon::today();

        return view('cms.event.list', [
            'events' => $events,
            'today' => $today
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

        if($request->has('filepath') && $request->has('filepath') != null){
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
        $cover = 'events/' . $event->title . '/' . $event->filepath;
        $gallery = [];

        if($event->gallery1 != 'no_pre.png'){
            array_push($gallery, $event->gallery1);
        }
        if($event->gallery2 != 'no_pre.png'){
            array_push($gallery, $event->gallery2);
        }
        if($event->gallery3 != 'no_pre.png'){
            array_push($gallery, $event->gallery3);
        }
        if($event->gallery4 != 'no_pre.png'){
            array_push($gallery, $event->gallery4);
        }
        if($event->gallery5 != 'no_pre.png'){
            array_push($gallery, $event->gallery5);
        }

        if($event){
            
                return view('guest.detail', [
                    'event' => $event,
                    'cover' => $cover,
                    'gallery' => $gallery
                ]);
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for does not seem to be in record.']);
        }
    }

    public function archive($id)
    {
        $event = Event::find($id);
        $ed = Carbon::parse($event->start_date);
        if($ed->gte(Carbon::today())){
            return back()->with('errors', ['Oops... ', 'This event has not been held yet. Comeback after {{$event->end_date}} to archive it.']);
        }
        else{
            return view('cms.event.archive', ['event' => $event]);
        }
    }

    public function store_archive(Request $request, $id)
    {
        $event = Event::find($id);

        if($request->has('gallery1') && $request->has('gallery1') != null){
            $g1 = $event->title . '.' . 'gallery.1' . '.' . time() . '.' . $request->gallery1->extension();
            $request->gallery1->move(public_path("events/gallery/{$event->title}"), $g1);
            $event->gallery1 = $g1;
        }
        
        if($request->has('gallery2') && $request->has('gallery2') != null){
            $g2 = $event->title . '.' . 'gallery.2' . '.' . time() . '.' . $request->gallery2->extension();
            $request->gallery2->move(public_path("events/gallery/{$event->title}"), $g2);
            $event->gallery2 = $g2;
        }

        if($request->has('gallery3') && $request->has('gallery3') != null){
            $g3 = $event->title . '.' . 'gallery.3' . '.' . time() . '.' . $request->gallery3->extension();
            $request->gallery3->move(public_path("events/gallery/{$event->title}"), $g3);
            $event->gallery3 = $g3;
        }

        if($request->has('gallery4') && $request->has('gallery4') != null){
            $g4 = $event->title . '.' . 'gallery.4' . '.' . time() . '.' . $request->gallery4->extension();
            $request->gallery4->move(public_path("events/gallery/{$event->title}"), $g4);
            $event->gallery4 = $g4;
        }

        if($request->has('gallery5') && $request->has('gallery5') != null){
            $g5 = $event->title . '.' . 'gallery.5' . '.' . time() . '.' . $request->gallery5->extension();
            $request->gallery5->move(public_path("events/gallery/{$event->title}"), $g5);
            $event->gallery5 = $g5;
        }

        if($request->has('description') && $request->input('description') != null){
            $event->description = $request->input('description');
        }

        $stat = $event->save();

        if($stat){
            return redirect()->route('cms_list_events')->with('success', 'Event has been successfully archived!');
        }
        else{
            return redirect()->back()->with('errors', ['Process terminated with error. Please try again.']);
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

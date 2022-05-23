<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Attendee;
use App\Models\Organisation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    //

    public function index()
    {
        $organisation = Organisation::find(1);
        $events = Event::where('reg_end', '>=', Carbon::now())->orderBy('reg_end', 'asc')->get();

        if($organisation){
            return view('guest.index', [
                'organisation' => $organisation,
                'events' => $events
            ]);
        }
        else{
            return redirect()->route('four-o-four');
        }
    }

    public function about()
    {
        $organisation = Organisation::find(1);
        if($organisation){
            return view('guest.about', [
                'organisation' => $organisation
            ]);
        }
        else{
            return redirect()->route('four-o-four');
        }
    }

    public function event()
    {
        $organisation = Organisation::find(1);
        // $past_events = Event::where('end_date', '<', Carbon::today())->orderBy('end_date', 'desc')->get();
        // $ongoing_events = Event::where('start_date', '<=', Carbon::today())->where('end_date', '<', Carbon::today())->orderBy('start_date', 'asc')->get();
        // $upcoming_events = Event::where('start_date', '>=', Carbon::today())->where('reg_end', '>=', Carbon::today())->orderBy('reg_end', 'asc')->get();

        $l_event = Event::latest()->orderBy('start_date', 'desc')->first();
        $events = Event::latest()->orderBy('end_date', 'desc')->paginate(15);
        if($organisation){
            return view('guest.event', ['events' => $events, 'l_event' => $l_event]);
        }
        else{
            return redirect()->route('four-o-four');
        }
        // if($organisation){
        //     return view('guest.event', [
        //         'organisation' => $organisation,
        //         'past_events' => $past_events,
        //         'ongoing_events' => $ongoing_events,
        //         'upcoming_events' => $upcoming_events
        //     ]);
        // }
        // else{
        //     return redirect()->route('four-o-four');
        // }
    }

    public function youth()
    {
        return view('guest.youth');
    }

    public function women()
    {
        return view('guest.women');
    }

    public function leaders()
    {
        return view('guest.leaders');
    }

    public function rsvp($id)
    {
        $event = Event::find($id);

        return view('guest.register', ['event' => $event]);
    }

    public function register(Request $request)
    {
        $i_attend = $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'occupation' => ['required', 'string'],
            'age' => ['required'],
            'event_id' => ['required', 'string'],
        ]);

        $p_attend = Attendee::where('firstname', $i_attend['firstname'])->where('phone_number', $i_attend['phone_number'])->where('event_id', $i_attend['event_id'])->first();
        $event = Event::find($i_attend['event_id']);
        $name = Route::currentRouteName();
// dd($p_attend);
        if($p_attend == null && $event){
            $attendee = new Attendee();
            if($event->price > 0 && $request->has('transaction_id')){
                $attendee->firstname = $i_attend['firstname'];
                $attendee->lastname = $i_attend['lastname'];
                $attendee->phone_number = $i_attend['phone_number'];

                if($request->has('email') && $request->input('email') != null){
                    $attendee->email = $request->input('email');
                }
                $attendee->occupation = $i_attend['occupation'];
                $attendee->age_group = $i_attend['age'];

                if($request->has('comment') && $request->input('comment') != null){
                    $attendee->comment = $request->input('comment');
                }
                else{
                    $attendee->comment = 'none';
                }

                if($request->has('reference') && $request->input('reference') != null){
                    $attendee->reference = $request->input('reference');
                }
                else{
                    $attendee->reference = 'NK';
                }

                $attendee->transaction_id = $request->has('transaction_id');
                $attendee->event_id = $event->id;

                $stat = $attendee->save();

                if($stat){
                    return redirect()->route('events')->with('name', $name)->with('success', 'You have successfully registered for the event. We will confrim you once we process your payment invoice. Thank you.');
                }
                else{
                    return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! Your registration for the event has not gone through successfully. Try again later.']);
                }
            }
            else if($event->price == 0){
                $attendee->firstname = $i_attend['firstname'];
                $attendee->lastname = $i_attend['lastname'];
                $attendee->phone_number = $i_attend['phone_number'];

                if($request->has('email') && $request->input('email') != null){
                    $attendee->email = $request->input('email');
                }
                else{
                    $attendee->email = 'noemail@ashagari.org';
                }

                $attendee->occupation = $i_attend['occupation'];
                $attendee->age_group = $i_attend['age'];

                if($request->has('comment') && $request->input('comment') != null){
                    $attendee->comment = $request->input('comment');
                }
                else{
                    $attendee->comment = 'none';
                }

                if($request->has('reference') && $request->input('reference') != null){
                    $attendee->reference = $request->input('reference');
                }
                else{
                    $attendee->reference = 'NK';
                }

                $attendee->event_id = $event->id;

                $stat = $attendee->save();

                if($stat){
                    return redirect()->route('event')->with('name', $name)->with('success', 'You have successfully registered for the event. We look forward to seeing you then. Thank you.');
                }
                else{
                    return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! Your registration for the event has not gone through successfully. Try again later.']);
                }
            }
        }
        else if($event == null){
            return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! The event you are trying to register for is not recorded. How did you find it?']);
        }
        else if($p_attend){
            return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! You have already signed up for this event. We look forward to seeing you then.']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Event;
use Carbon\Carbon;

class AttendeeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only(['index', 'confirm']);
    }

    //
    public function index($id)
    {
        $attendees = Attendee::where('event_id', $id)->orderBy('created_at', 'desc')->get();

        return view('cms.attendees.list', [
            'attendees' => $attendees
        ]);
    }

    public function create($id)
    {
        $event = Event::find($id);
        $attendees = Attendee::where('event_id', $id)->get();

        if($event && $event->reg_end >= Carbon::today()){
            if($event->reg_end >= Carbon::today()){
                if($attendees && $event->seats > count('attendees')){
                    return view('cms.attendee.rsvp', [
                        'event' => $event
                    ]);   
                }
                else {
                    return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking to register for is fully booked.']);    
                }
            }
            else{
                return redirect()->back()->with('errors', ['Process Aborted', 'Oops! Registration date for this event has passed.']);
            }
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }

    public function store(Request $request)
    {
        $i_attend = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['string'],
            'phone_number' => ['required', 'string'],
            'transaction_id' => ['string'],
            'event_id' => ['required', 'string'],
        ]);

        $p_attend = $Attendee::where('name', $i_attend['name'])->where('phone_number', $i_attend['phone_number'])->where('event_id', $i_attend['event_id'])->get();
        $event = Event::find($i_attend['event_id']);

        if($p_attend == null && $event){
            if($event->price > 0 && $request->has('transaction_id')){
                $attendee = new Attendee();
                $attendee->name = $i_attend['name'];

                if($request->has('email')){
                    $attendee->email = $i_attend['email'];
                }

                $attendee->phone_number = $i_attend['phone_number'];
                $attendee->transaction_id = $i_attend['transaction_id'];
                $attendee->event_id = $event->id;
                
                $stat = $attendee->save();

                if($stat){
                    return redirect()->route('events')->with('success', 'You have successfully registered for the event. We will confrim you once we process your payment invoice. Thank you.');
                }
                else{
                    return redirect()->back()->with('errors', ['Process Aborted', 'Oops! Your registration for the event has not gone through successfully. Try again later.']);
                }
            }
            else if($event->price == 0){
                $attendee = new Attendee();
                $attendee->name = $i_attend['name'];

                if($request->has('email')){
                    $attendee->email = $i_attend['email'];
                }

                $attendee->phone_number = $i_attend['phone_number'];
                $attendee->event_id = $event->id;
                
                $stat = $attendee->save();

                if($stat){
                    return redirect()->route('events')->with('success', 'You have successfully registered for the event. We look forward to seeing you then. Thank you.');
                }
                else{
                    return redirect()->back()->with('errors', ['Process Aborted', 'Oops! Your registration for the event has not gone through successfully. Try again later.']);
                }
            }
        }
        else if($event == null){
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are trying to register for is not recorded. How did you find it?']);
        }
        else if($p_attend){
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! You have already signed up for this event. We look forward to seeing you then.']);
        }
    }

    public function confirm($id, $event_id){
        $attendee = Attendee::find($id);
        $event = Event::find($event_id);

        if($attendee){
            if($event){
                $attendee->confirmed = true;
                $stat = $attendee->save();
    
                if($stat){
                    return redirect()->route('list_attendees', $event->id)->with('success', '{{$attendee->name}} has been successfully confirmed.');
                }
                else{
                    return redirect()->back()->with('errors', ['Process Aborted', '{{$attendee->name}} failed to get confirmed.']);
                }
            }
            else{
                return redirect()->back()->with('errors', ['Process Aborted', 'There is no event recorded matching to the one you are looking for. How did you find it?']);                
            }
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'There is no attendee recoded matching to the one you are looking for. How did you find it?']);
        }
    }

    public function destroy($id)
    {
        $attendee = Attendee::find($id);

        if($attendee){
            $attendee->delete();
            return redirect()->back()->with('success', 'Attendee has been successfully removed.');
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The attendee you are looking for does not seem to be in record.']);
        }
    }
}

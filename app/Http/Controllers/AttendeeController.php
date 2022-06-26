<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Event;
use App\Models\MailingList;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PDF;

class AttendeeController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth')->only(['index', 'confirm']);
    // }

    //
    public function index($id)
    {
        $name = Route::currentRouteName();
        $new_registers = Attendee::where('event_id', $id)->where('confirmed', false)->orderBy('created_at', 'desc')->get();
        $attendees = Attendee::where('event_id', $id)->where('confirmed', true)->orderBy('created_at', 'desc')->get();
        $event = Event::find($id);

        return view('cms.attendees.list', [
            'name' => $name,
            'nrs' => $new_registers,
            'attendees' => $attendees,
            'event' => $event
        ]);
    }

    public function create($id)
    {
        $name = Route::currentRouteName();
        $event = Event::find($id);
        $attendees = Attendee::where('event_id', $id)->get();

        if($event && $event->reg_end >= Carbon::today()){
            if($event->reg_end >= Carbon::today()){
                if($attendees && $event->seats > count($attendees)){
                    return view('guest.event.register', [
                        'name' => $name,
                        'event' => $event
                    ]);
                }
                else {
                    return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! The event you are looking to register for is fully booked.']);
                }
            }
            else{
                return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! Registration date for this event has passed.']);
            }
        }
        else{
            return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }

    public function store(Request $request)
    {
        $i_attend = $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'email' => ['email'],
            'occupation' => ['required', 'string'],
            'age' => ['required'],
            'comment' => ['string'],
            'transaction_id' => ['string'],
            'event_id' => ['required', 'string'],
        ]);

        $p_attend = Attendee::where('name', $i_attend['name'])->where('phone_number', $i_attend['phone_number'])->where('event_id', $i_attend['event_id'])->get();
        $event = Event::find($i_attend['event_id']);
        $name = Route::currentRouteName();

        if($p_attend == null && $event){
            $attendee = new Attendee();
            if($event->price > 0 && $request->has('transaction_id')){
                $attendee->firstname = $i_attend['firstname'];
                $attendee->lastname = $i_attend['lastname'];
                $attendee->phone_number = $i_attend['phone_number'];

                if($request->has('email')){
                    $attendee->email = $i_attend['email'];
                    
                    if(MailingList::where('email', $i_attend['email'])->exists() == false){
                        $mail = new MailingList();
                        $mail->email = $i_attend['email'];
                        $mail->save();    
                    }
                }

                $attendee->occupation = $i_attend['occupation'];
                $attendee->age_group = $i_attend['age'];

                if($request->has('comment')){
                    $attendee->comment = $i_attend['comment'];
                }

                $attendee->transaction_id = $i_attend['transaction_id'];
                $attendee->event_id = $event->id;

                $stat = $attendee->save();

                if($stat){
                    return redirect()->route('event')->with('name', $name)->with('success', 'You have successfully registered for the event. We will confrim you once we process your payment invoice. Thank you.');
                }
                else{
                    return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! Your registration for the event has not gone through successfully. Try again later.']);
                }
            }
            else if($event->price == 0){
                $attendee->firstname = $i_attend['firstname'];
                $attendee->lastname = $i_attend['lastname'];
                $attendee->phone_number = $i_attend['phone_number'];

                if($request->has('email')){
                    $attendee->email = $i_attend['email'];
                }
                $attendee->occupation = $i_attend['occupation'];
                $attendee->age_group = $i_attend['age'];

                if($request->has('comment')){
                    $attendee->comment = $i_attend['comment'];
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

    public function confirm($id, $event_id){
        $attendee = Attendee::find($id);
        $event = Event::find($event_id);
        $name = Route::currentRouteName();

        if($attendee){
            if($event){
                $attendee->confirmed = !$attendee->confirmed;
                $stat = $attendee->save();

                if($stat){
                    return redirect()->route('cms_list_attendees', $event->id)->with('name', $name)->with('success', '{{$attendee->name}} has been successfully confirmed.');
                }
                else{
                    return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', '{{$attendee->name}} failed to get confirmed.']);
                }
            }
            else{
                return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'There is no event recorded matching to the one you are looking for. How did you find it?']);
            }
        }
        else{
            return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'There is no attendee recoded matching to the one you are looking for. How did you find it?']);
        }
    }

    public function destroy($id)
    {
        $attendee = Attendee::find($id);
        $name = Route::currentRouteName();

        if($attendee){
            $attendee->delete();
            return redirect()->back()->with('name', $name)->with('success', 'Attendee has been successfully removed.');
        }
        else{
            return redirect()->back()->with('name', $name)->with('errors', ['Process Aborted', 'Oops! The attendee you are looking for does not seem to be in record.']);
        }
    }

    public function export_verified($id)
    {
        $event = Event::find($id);
        $verified_attendees = Attendee::where('event_id', $id)->where('confirmed', true)->get();
        $today = Carbon::today()->format('d M Y');
        $view = \View::make('cms.attendees.pdf', ['today' => $today, 'attendees' => $verified_attendees, 'event' => $event]);
        $html_content =$view->render();
        PDF::SetAuthor('Earald ERP - Ashagari Consultancy');
        PDF::SetTitle("Verified Attendees - {{ $event->title }}");
        PDF::SetSubject('A complete list of attendees verified to attend on call.');
        PDF::SetPrintHeader(false);
        PDF::SetPrintFooter(false);
        PDF::SetMargins(10, PDF_MARGIN_TOP, 10);
        PDF::AddPage('L', 'A4');
        PDF::Write(0, Carbon::now()->format('d M Y (H:m:i)'), '', 0, 'L', true, 0, false, false, 0);
        PDF::Write(0, Auth::user()->name, '', 0, 'L', true, 0, false, false, 0);
        PDF::WriteHTML($html_content, true, false, true, false, '');
        PDF::Output("Verified Attendees - {{ $event->title }}", 'I');
    }
}
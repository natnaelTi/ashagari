<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Organisation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    //

    public function index()
    {
        $organisation = Organisation::find(1);
        $event = Event::where('reg_end', '>=', Carbon::now())->orderBy('reg_end', 'asc')->first();

        if($organisation){
            return view('guest.index', [
                'organisation' => $organisation,
                'event' => $event
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
        $past_events = Event::where('end_date', '<', Carbon::today())->orderBy('end_date', 'desc')->get();
        $ongoing_events = Event::where('start_date', '<=', Carbon::today())->where('end_date', '<', Carbon::today())->orderBy('start_date', 'asc')->get();
        $upcoming_events = Event::where('start_date', '>=', Carbon::today())->where('reg_end', '>=', Carbon::today())->orderBy('reg_end', 'asc')->get();

        if($organisation){
            return view('guest.event', [
                'organisation' => $organisation,
                'past_events' => $past_events,
                'ongoing_events' => $ongoing_events,
                'upcoming_events' => $upcoming_events
            ]);
        }
        else{
            return redirect()->route('four-o-four');
        }
    }
}

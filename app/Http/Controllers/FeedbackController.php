<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        $new_feedbacks = Feedback::where('seen', false)->orderBy('id', 'desc')->paginate(15);
        $archived_feedbacks = Feedback::where('seen', true)->orderBy('id', 'desc')->paginate(15);
        return view('cms.feedback.list', [
            'newfbs' => $new_feedbacks, 
            'archivedfbs' => $archived_feedbacks
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => ['regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10']
        ]);

        $feedback = new Feedback();
        if($request->has('firstname') && $request->input('firstname') != null){
            $feedback->firstname = $request->input('firstname');
        }
        if($request->has('lastname') && $request->input('lastname') != null){
            $feedback->lastname = $request->input('lastname');
        }
        if($request->has('email') && $request->input('email') != null){
            $feedback->email = $request->input('email');
        }
        if($request->has('phone') && $request->input('phone') != null){
            $feedback->phone = $request->input('phone');
        }
        if($request->has('message') && $request->input('message') != null){
            $feedback->message = $request->input('message');
        }
        $feedback->seen = false;
        $stat = $feedback->save();

        if($stat){
            return back()->with('success', 'Your message has been successfully submitted. <br/> Thank you for giving us your feedback.');
        }
        else{
            return back()->with('error', 'Error: Oops! We apologize, something went wrong. Please try again. Thank you.');
        }
    }

    public function change_status($id)
    {
        $feedback = Feedback::find($id);
        $feedback->seen = !$feedback->seen;
        $stat = $feedback->save();

        if($stat){
            if($feedback->seen){
                return back()->with('success', 'Success: Feedback has been successfully archived.');
            }
            else{
                return back()->with('success', 'Success: Feedback has been successfully returned.');
            }
        }
        else{
            return back()->with('error', 'Error: Something went wrong. Feedback failed to be archived.');
        }
    }
}

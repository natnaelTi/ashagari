<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailingList;

class MailingListController extends Controller
{
    //

    public function index() {
        $mailing_list = MailingList::orderBy('id', 'desc')->get();

        return view('cms.mailinglist.list', ['list' => $mailing_list]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:mailing_lists,email']
            ]);

        $mail = new MailingList();
        $mail->email = $request->email;
        $stat = $mail->save();
        if($stat){
            return back()->with('success', 'You have been registered successfully!');
        }
        else{
            return back()->with('errors', ['Process Aborted', 'Please try again!']);
        }
    }
}
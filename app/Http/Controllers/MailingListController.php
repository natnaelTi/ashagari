<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailingListController extends Controller
{
    //

    public function store(Request $request)
    {
        return back()->with('success', 'You have been registered successfully!');
    }
}
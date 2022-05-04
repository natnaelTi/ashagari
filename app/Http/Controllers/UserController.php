<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $a_user = Auth::user();
        
        if($user == null || $user->id != $a_user->id){
            return redirect()->back()->with('errors', ['Process Aborted', 'User mismatch error. You are trying to access someone else\'s credentials. Go back!']);
        }

        else if($user != null || $user->id == $a_user->id){
            return view('cms.users.edit', [
                'user' => $user
            ]);
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'There is no user in record with such credentials. Going back ...']);
        }
    }

    public function update(Request $request, $id)
    {
        $i_user = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string'],
            'filepath' => ['string']
        ]);

        $user = User::find($id);

        if($user){
            $user->first_name = $i_user['first_name'];
            $user->last_name = $i_user['last_name'];
            $user->email = $i_user['email'];
            $user->password = Hash::make($i_user['password']);

            if($request->has('filepath')){
                $fp = $i_user['first_name'] . '.' . $i_user['last_name'] . '.' . 'profile' . '.' . $request->filepath->extension();
                $request->filepath->move(public_path("users/{{$i_user['first_name']}}.{{$i_user['last_name']}}"), $fp);
                $user->filepath = $fp;
            }

            $stat = $user->save();

            if($stat){
                return redirect()->route('dashboard')->with('success', 'Your profile has been successfully updated.');
            }
            else{
                return redirect()->back()->with('errors', ['Process Aborted', 'Your profile failed to be updated.']);
            }
        }
    }
}

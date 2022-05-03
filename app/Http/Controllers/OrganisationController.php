<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function show($id)
    {
        $admin = Auth::user();
        $organisation = Organisation::find($id);

        return view('cms.organisations.view', [
            'organisation' => $organisation,
            'admin' => $admin
        ]);
    }

    //
    public function edit($id)
    {
        $organisation = Organisation::find($id);

        if($organisation){
            return view('cms.organisations.edit', [
                'organisation' => $organisation
            ]);
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The organisation you are looking does not seem to be in record.']); 
        }
    }

    public function update(Request $request, $id)
    {
        $i_org = $request->validate([
            'name' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'year' => ['required', 'numeric'],
            'primary_phonenumber' => ['required', 'string', 'unique:organisations'],
            'secondary_phonenumber' => ['string', 'unique:organisations'],
            'teritary_phonenumber' => ['string', 'unique:organisations'],
            'primary_email' => ['required', 'string', 'unique:organisations'],
            'secondary_email' => ['string', 'unique:organisations'],
            'location' => ['required', 'string'],
            'filepath' => ['required'],
            'user_id' => ['string']
        ]);

        $org = Organisation::find($id);
        if($request->has('user_id')){
            $ceo = User::find($i_org['user_id']);
        }
        $ceo = User::where('organisation_id', $org->id)->where('role', 'ceo')->first();

        if($org){
            $org->name = $i_org['name'];
            $org->bio = $i_org['bio'];
            $org->year = $i_org['year'];
            $org->primary_phonenumber = $i_org['primary_phonenumber'];
            
            if($request->has('secondary_phonenumber')){
                $org->secondary_phonenumber = $i_org['secondary_phonenumber'];
            }

            if($request->has('tertiary_phonenumber')){
                $org->tertiary_phonenumber = $i_org['tertiary_phonenumber'];
            }

            $org->primary_email = $i_org['primary_email'];
            
            if($request->has('secondary_email')){
                $org->secondary_phonenumber = $i_org['secondary_email'];
            }

            $org->location = $i_org['location'];
            
            if($ceo){
                $org->user_id = $ceo->id;
            }
            else{
                $org->user_id = Auth::id();
            }

            $stat = $org->save();
            
            if($stat){
                return redirect()->route('cms_show_organisation')->with('success', 'Organisation has been successfully updated.');
            }
            else{
                return redirect()->back()->with('errors', ['Process Aborted', 'Organisation failed to be updated.']);
            }
        }
    }

    public function destroy($id)
    {
        $org = Organisation::find($id);
        if($org){
            $org->delete();
            return redirect()->back()->with('success', 'Organisation has been successfully removed.');
        }
        else{
            return redirect()->back()->with('errors', ['Process Aborted', 'Oops! The event you are looking for seems to not be in record.']);
        }
    }
}

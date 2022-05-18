@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    <div class="card">
        <div class="card-header">
            <h2>{{ $organisation->name }}'s Profile</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('organisations/Ashagari Charitable Organisation/Ashagari.Charitable.Organisation.logo.svg') }}" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Yield Page Content -->
@endsection

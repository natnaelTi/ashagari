@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    <h2 class="text-center my-4">New Registers</h2>
    @if(count($nrs) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">S. No.</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Occupation</th>
                                        <th>Reference</th>
                                        @if ($event->price > 0)
                                            <th>Transation Number</th>
                                            <th>Verified</th>
                                        @endif
                                        <th>--</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach($nrs as $key => $attendee)
                                        <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $attendee->firstname }} {{ $attendee->lastname }}</td>
                                            <td>{{ $attendee->phone_number }}</td>
                                            <td>{{ $attendee->email }}</td>
                                            <td>{{ $attendee->age_group }}</td>
                                            <td>{{ $attendee->occupation }}</td>
                                            <td>{{ $attendee->reference }}</td>

                                            @if($event->price > 0)
                                                <td>{{ $attendee->transaction_id }}</td>

                                                @if ($attendee->confirmed)
                                                    <td style="color: green !important;">Confirmed</td>
                                                @else
                                                    <td style="color: red !important;">Pending</td>
                                                @endif
                                            @endif

                                            @if ($event->price > 0)
                                                <td>
                                                    <form method="POST" action="{{route('cms_confirm_attendee', [$attendee->id, $event->id])}}">
                                                        @csrf
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <button type="submit" class="btn btn-sm btn-info">Approve</button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="card cms-event__card">
            <div class="card-header text-center">
                There is no one signed up for this event yet ... You may have to push it more to the public.
            </div>
        </div>
    @endif

    <h2 class="text-center my-4 pt-4">Verified Attendees</h2>
    @if(count($attendees) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th class="text-center">S. No.</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Occupation</th>
                                        <th>Reference</th>
                                        @if ($event->price > 0)
                                            <th>Transation Number</th>
                                            <th>Verified</th>
                                        @endif
                                        <th>--</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach($attendees as $key => $attendee)
                                        <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $attendee->firstname }} {{ $attendee->lastname }}</td>
                                            <td>{{ $attendee->phone_number }}</td>
                                            <td>{{ $attendee->email }}</td>
                                            <td>{{ $attendee->age_group }}</td>
                                            <td>{{ $attendee->occupation }}</td>
                                            <td>{{ $attendee->reference }}</td>

                                            @if($event->price > 0)
                                                <td>{{ $attendee->transaction_id }}</td>

                                                @if ($attendee->confirmed)
                                                    <td style="color: green !important;">Confirmed</td>
                                                @else
                                                    <td style="color: red !important;">Pending</td>
                                                @endif
                                            @endif

                                            @if ($event->price > 0)
                                                <td>
                                                    <form method="POST" action="{{route('cms_confirm_attendee', [$attendee->id, $event->id])}}">
                                                        @csrf
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <button type="submit" class="btn btn-sm btn-info">Revoke</button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="card cms-event__card">
            <div class="card-header text-center">
                There is no one verified to attend this event. You may have to go through the registrant pool first.
            </div>
        </div>
    @endif

    <div>
        <a type="button" href="{{ route('cms_export_attendees', [$event->id]) }}" class="btn btn-outline-info">Export Verified Attendees</a>
    </div>
    <!-- End Yield Page Content -->
@endsection

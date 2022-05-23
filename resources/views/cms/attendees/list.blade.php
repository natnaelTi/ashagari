@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    @if(count($attendees) > 0)
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
                                                    <td style="color: green !important;">{{ $attendee->confirmed }}</td>
                                                @else
                                                    <td style="color: red !important;">{{ $attendee->confirmed }}</td>
                                                @endif
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
    <!-- End Yield Page Content -->
@endsection

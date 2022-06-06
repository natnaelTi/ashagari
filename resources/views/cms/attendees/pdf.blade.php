<h1 class="my-3">Ashagari Consultancy</h2>
<h3 class="mx-5 py-4">{{ $event->title }}</h3>
<small class="mx-0 py-1">Generated on: {{ $today }}</small>
<br/>
<h2 class="mx-3 py-5">Verified Attendees</h2>

<table class="table table-striped" border="0" cellpadding="2" cellspacing="7">
    <thead>
        <tr nobr="true" align="center" class="text-center" height="50" style="font-weight: 700 !important;">
            <th colspan="1" scope="col" class="text-right">#</th>
            <th colspan="2" scope="col">Name</th>
            <th colspan="1" scope="col">Phone Number</th>
            <th colspan="2" scope="col">Email</th>
            <th colspan="1" scope="col">Age</th>
            <th colspan="1" scope="col">Occupation</th>
            <th colspan="1" scope="col">Check</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($attendees as $key=>$attendee)
            <tr nobr="true" height="30">
                <th colspan="1" scope="row" class="text-right" style="font-weight: 700 !important;">{{ $key }}</th>
                <td colspan="2">{{ $attendee->firstname }} {{ $attendee->lastname }}</td>
                <td colspan="1">{{ $attendee->phone_number }}</td>
                <td colspan="2">{{ $attendee->email }}</td>
                <td colspan="1">{{ $attendee->age_group }}</td>
                <td colspan="1">{{ $attendee->occupation }}</td>
                {{-- <td colspan="1" style="border: 1px solid blue !important;"></td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
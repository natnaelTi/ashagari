@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    @if(count($events) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">S. No.</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Seats</th>
                                        <th>Price</th>
                                        <th class="text-center"><i class="fa fa-edit"></i></th>
                                        <th class="text-center"><i class="fa fa-trash"></i></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach($events as $key => $event)
                                        <tr class="cell-{{$key}}" data-toggle="collapse" data-target="#detail{{$key}}">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->location }}</td>

                                            @if($event->seats > 0)
                                                <td>{{ $event->seats }}</td>
                                            @else
                                                <td>Unlimited</td>
                                            @endif

                                            @if($event->price > 0)
                                                <td>{{ $event->price }} ETB</td>
                                            @else
                                                <td>Free</td>
                                            @endif

                                            <td class="text-center">
                                                <a href="{{ route('cms_edit_event', [$event->id]) }}" type="button" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('cms_delete_event', [$event->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                            <td class="table-elipse" data-toggle="collapse" data-target="#demo">
                                                <a href="{{ route('cms_list_attendees', [$event->id]) }}" type="button" class="btn btn-outline-primary">Attendees</a>
                                            </td>
                                            @if($today->gt(\Carbon\Carbon::parse($event->end_date)))
                                                <td class="text-center">
                                                    <a href="{{ route('cms_archive_event', [$event->id]) }}" type="button" class="btn btn-outline-info">Archive</a>
                                                </td>
                                            @endif
                                        </tr>

                                        <tr id="detail{{$key}}" class="collapse cell-1 row-child">
                                            <td class="text-center" colspan="1"><i class="fa fa-angle-up"></i></td>
                                            <td colspan="7">
                                                Brief: <br/>
                                                <p class="description">{{ $event->description }}</p>

                                                <div class="event_date">Opening Date: {{ $event->start_date }}</div>
                                                <div class="event_date">Closing Date: {{ $event->end_date }}</div>

                                                {{-- @if($event->filepath != 'none.jpg') --}}
                                                    {{-- <img src="{{ pub }}" --}}
                                                {{-- @else --}}

                                                {{-- @endif --}}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-25">
                <a type="button" class="cms-event__button btn btn-outline-primary" href="{{ route('cms_create_event') }}">Create Event</a>
            </div>
        </div>
    @else
        <div class="card cms-event__card">
            <div class="card-header text-center">
                There are no events in record yet ... Care to add one?
            </div>
            <div class="card-body">
                <a type="button" class="cms-event__button" href="{{ route('cms_create_event') }}">Create Event</a>
            </div>
        </div>
    @endif
    <!-- End Yield Page Content -->
@endsection

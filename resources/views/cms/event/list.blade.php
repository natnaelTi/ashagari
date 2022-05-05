@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    @if(count($events) > 0)
        <article>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Events List</h2>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Seats</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr data-toggle="collapse" id="row{{$event->id}}" data-target=".row{{$event->id}}">
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

                                <td>Edit</td>
                                <td>Delete</td>
                                <td>
                                    <a type="button" class="btn btn-default btn-sm">Expand</a>
                                </td>
                            </tr>
                            <tr class="collapse row{{$event->id}}">
                                <div class="cms-table__collapse">
                                    <p>{{ $event->description }}</p>
                                    <p>Start Date: <span>{{ $event->start_date }}</span></p>
                                    <p>End Date: <span>{{ $event->end_date }}</span></p>
                                    <p>Registration Due: <span>{{ $event->$reg_end }}</span></p>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </article>
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
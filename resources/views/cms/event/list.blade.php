@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    @if (count($events) > 0)
        <article>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Events List</h2>
                </div>
                <div class="table-wrap">
                    <table class="table myaccordion table-hover" id="accordion">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Seats</th>
                                <th>Price</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $key => $event)
                                <tr data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->location }}</td>

                                    @if ($event->seats > 0)
                                        <td>{{ $event->seats }}</td>
                                    @else
                                        <td>Unlimited</td>
                                    @endif

                                    @if ($event->price > 0)
                                        <td>{{ $event->price }} ETB</td>
                                    @else
                                        <td>Free</td>
                                    @endif

                                    <td>
                                        <a href="{{ route('cms_edit_event', [$event->id]) }}">
                                            <i class="fas fa-edit edit" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('cms_delete_event', [$event->id]) }}">
                                            <i class="fas fa-trash delete" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <i class="fa" aria-hidden="true"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" id="collapseOne" class="collapse show acc" data-parent="#accordion">
                                        @if ($event->description)
                                            <p>{{ $event->description }}</p>
                                        @else
                                            <p>No description added to this event.</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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

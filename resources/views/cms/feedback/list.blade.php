@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    <h2 class="text-center my-4">New Feedback</h2>
    @if(count($newfbs) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr style="padding: 20px 0 !important;">
                                        <th class="text-center">S. No.</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach($newfbs as $key => $fb)
                                        <tr style="margin: 70px 0 !important;" class="cell-{{$key}}" data-toggle="collapse" data-target="#message{{$key}}">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $fb->created_at }}</td>
                                            <td>{{ $fb->firstname }} {{ $fb->lastname }}</td>
                                            <td>{{ $fb->phone }}</td>
                                            <td>{{ $fb->email }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('cms_change_feedback_status', [$fb->id]) }}" type="button" class="btn btn-sm btn-success">Archive</a>
                                            </td>
                                        </tr>

                                        <tr id="message{{$key}}" class="collapse cell-{{$key}} row-child" style="background-color: rgb(238, 238, 238) !important;">
                                            <td class="text-center" colspan="1"><i class="fa fa-angle-up"></i></td>
                                            <td colspan="7">
                                                <small style="text-transform: uppercase; font-weight: 600 !important; font-size: 9px !important;">Message:</small>
                                                <p class="ml-4 pl-4 description" style="display: block !important; margin: 5px 12px !important;">{{ $fb->message }}</p>
                                            </td>

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
                There are no feedback recorded yet ...
            </div>
        </div>
    @endif

    <h2 class="text-center my-4">Feedback Archives</h2>
    @if(count($archivedfbs) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr style="padding: 7px 0 !important;">
                                        <th class="text-center">S. No.</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach($archivedfbs as $key => $fb)
                                        <tr class="ar-cell-{{$key}}" data-toggle="collapse" data-target="#ar-message{{$key}}" style="padding: 7px 0 !important;">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $fb->created_at }}</td>
                                            <td>{{ $fb->firstname }} {{ $fb->lastname }}</td>
                                            <td>{{ $fb->phone }}</td>
                                            <td>{{ $fb->email }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('cms_change_feedback_status', [$fb->id]) }}" type="button" class="btn btn-sm btn-warning">Return</a>
                                            </td>
                                        </tr>

                                        <tr id="ar-message{{$key}}" class="collapse ar-cell-{{$key}} row-child" style="background-color: rgb(238, 238, 238) !important;">
                                            <td class="text-center" colspan="1"><i class="fa fa-angle-up"></i></td>
                                            <td colspan="7">
                                                <small style="text-transform: uppercase; font-weight: 600 !important; font-size: 9px !important;">Message:</small>
                                                <p class="ml-4 pl-4 description" style="display: block !important; margin: 5px 12px !important;">{{ $fb->message }}</p>
                                            </td>

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
                There are no archived feedback recorded yet ...
            </div>
        </div>
    @endif
    <!-- End Yield Page Content -->
@endsection

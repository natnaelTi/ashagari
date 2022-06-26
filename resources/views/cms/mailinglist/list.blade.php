@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    @if(count($list) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">S. No.</th>
                                        <th>Email</th>
                                        <th class="text-center"><i class="fa fa-envelope"></i></th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach($list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td class="text-center">
                                                <a href="mailto:{{$item->email}}" type="button" class="btn btn-warning">Send email</a>
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
                There is no one registred for the mailing list yet. Come back later, but you may want to call for action more!
            </div>
        </div>
    @endif
    <!-- End Yield Page Content -->
@endsection

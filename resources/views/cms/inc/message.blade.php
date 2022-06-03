@if(Session::get('success'))
    <div class="alert success-alert" style="z-index: 9999 !important; width: 60% !important; margin: 20px auto !important; color:rgb(4, 126, 34) !important; border-color: rgb(4, 126, 34) !important; border-size: 1px !important; border-radius: 12px !important; background-color: rgb(174, 223, 186) !important;">
        <div class="row">
            <div class="col-10">
                <h3>Great! Success ...</h3>
                <h5>{!! Session::get('success') !!}</h5>
            </div>
            <div class="col-2 align-self-center">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif

@if(Session::get('error'))
    <div class="alert danger-alert" style="z-index: 9999 !important; width: 60% !important; color:rgb(126, 4, 4) !important; border-color: rgb(126, 4, 4) !important; border-size: 1px !important; border-radius: 12px !important; background-color: rgb(207, 115, 115) !important;">
        <h3>Oh snap! Something went wrong ...</h3>
        <h5>{!! Session::get('error') !!}</h5>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

@if(Session::get('errors') || $errors->any())
    <div class="alert danger-alert" style="z-index: 9999 !important; width: 60% !important; color:rgb(126, 4, 4) !important; border-color: rgb(126, 4, 4) !important; border-size: 1px !important; border-radius: 12px !important; background-color: rgb(207, 115, 115) !important;">
        <h3>Oh snap! Something went wrong ...</h3>
        <ul>
            @foreach($errors as $error)
                <li>
                    <h5>{!! $error !!}</h5>
                </li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

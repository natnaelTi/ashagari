@if(Session::get('success'))
    <div class="alert success-alert">
        <h3>Great! Success ...</h3>
        <h5>{{ Session::get('success') }}</h5>
        <a class="close">&times;</a>
    </div>
@endif

@if(Session::get('error'))
    <div class="alert danger-alert">
        <h3>Oh snap! Something went wrong ...</h3>
        <h5>{{ Session::get('error') }}</h5>
        <a class="close">&times;</a>
    </div>
@endif

@if(Session::get('errors') || $errors->any())
    <div class="alert danger-alert">
        <h3>Oh snap! Something went wrong ...</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    <h5>{{ $error }}</h5>
                </li>
            @endforeach
        </ul>
        <a class="close">&times;</a>
    </div>
@endif

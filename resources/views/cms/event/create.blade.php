@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    <div class="card event-form">
        <div class="card-body">
            <form method="POST" name="event_form" id="event_form" action="{{ $route ?? route('cms_store_event') }}" enctype="multipart/form-data" class="cms-form">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="title" class="cms-label">Title <span class="required">*</span></label>
                                <input type="text" name="title" id="title" class="cms-input" value="{{ old('title') ?? $event['title'] ?? '' }}" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="location" class="cms-label">Location <span class="required">*</span></label>
                                <input type="text" name="location" id="location" class="cms-input" value="{{ old('location') ?? $event['location'] ?? '' }}" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-input" >
                                <label for="description" class="cms-label">Event Brief</label>
                                <textarea name="description" id="description" class="cms-input" value="{{ old('description') ?? $event['description'] ?? '' }}">{{ old('description') ?? $event['description'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div> --}}
    {{-- </div>
        </div> --}}

    <div class="cms-event-form">
        <form method="POST" name="event_form" id="event_form" action="{{ $route ?? route('cms_store_event') }}" enctype="multipart/form-data" class="cms-form">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <fieldset>
                <legend><span class="number">1</span> Basic Information</legend>
                <input type="text" name="title" id="title" class="cms-form__input" placeholder="event title ..."  value="{{ old('title') ?? $event['title'] ?? '' }}" required/>
                <input type="text" name="location" id="location" class="cms-form__input" placeholder="event location ..."  value="{{ old('location') ?? $event['location'] ?? '' }}" required/>

                <textarea type="text" name="description" id="description" class="cms-form__input" placeholder="event brief ..."  value="{{ old('description') ?? $event['description'] ?? '' }}">{{ old('description') ?? $event['description'] ?? '' }}</textarea>
                <div style="display: inline-flex !important; width: 100% !important;">
                    <span style="padding: 0 1em 0 0 !important;">
                        <label for="start_date">Opening Date</label>
                        <input type="date" name="start_date" id="start_date" class="cms-form__input" placeholder="event opening date ..."  value="{{ old('start_date') ?? $event['start_date'] ?? '' }}" required/>
                    </span>
                    <span style="padding: 0 1em 0 1em !important;">
                        <label for="end_date">Closing Date</label>
                        <input type="date" name="end_date" id="end_date" class="cms-form__input" placeholder="event closing date ..."  value="{{ old('end_date') ?? $event['end_date'] ?? '' }}" required/>
                    </span>
                    <span style="padding: 0 0 0 1em !important;">
                        <label for="reg_end">Registration Due</label>
                        <input type="date" name="reg_end" id="reg_end" class="cms-form__input" placeholder="event registration date ..."  value="{{ old('reg_end') ?? $event['reg_end'] ?? '' }}" required/>
                    </span>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="start_date" class="cms-label">Opening Date <span class="required">*</span></label>
                                <input type="date" name="start_date" id="start_date" class="cms-input" value="{{ old('start_date') ?? $event['start_date'] ?? '' }}" required/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="end_date" class="cms-label">Closing Date <span class="required">*</span></label>
                                <input type="date" name="end_date" id="end_date" class="cms-input" value="{{ old('end_date') ?? $event['end_date'] ?? '' }}" required/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="reg_end" class="cms-label">Registration Due <span class="required">*</span></label>
                                <input type="date" name="reg_end" id="reg_end" class="cms-input" value="{{ old('reg_end') ?? $event['reg_end'] ?? '' }}" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="seats" class="cms-label">Available Seats</label>
                                <input type="number" name="seats" id="seats" class="cms-input" value="{{ old('seats') ?? $event['seats'] ?? '' }}"/>
                                <small class="caption">Leave this field if the event is open without limit on seatings.</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="price" class="cms-label">Price (ETB)</label>
                                <input type="number" name="price" id="price" class="cms-input" value="{{ old('price') ?? $event['price'] ?? '' }}"/>
                                <small class="caption">Leave this field if the event is free.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-input">
                                <label for="filepath" class="cms-form__label cms-file-upload__label">Upload Poster</label>
                                <input type="file" name="filepath" id="filepath" accept="image/*" onchange="showPreview(event);" class="file-input" />
                                <small class="caption">Leave this field if you do not have a poster ready for the event.</small>
                                <small class="warning" style="padding-top: 1px !important; text-transform: uppercase !important; display: block !important;">But it is always better to have a supporting imagery for promoting an event</small>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="preview">
                                {{-- <img id="filepath-preview" /> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Yield Page Content -->
@endsection

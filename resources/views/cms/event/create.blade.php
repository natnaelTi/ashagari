@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    {{-- <div class="card cms-event__card">
            <div class="card-body">
                <form method="POST" name="event_form" id="event_form" action="{{ $route ?? route('cms_store_event') }}" enctype="multipart/form-data" class="cms-form">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cms-event-form-cover"></div>
                                </td>
                                <td>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="title" class="cms-form__label">Title<span class="required">*</span></label>
                                                    <input type="text" name="title" id="title" class="cms-form__input" placeholder="event title ..."  value="{{ old('title') ?? $event['title'] ?? '' }}" required/>
                                                </td>
                                                <td>
                                                    <label for="location" class="cms-form__label">Location<span class="required">*</span></label>
                                                    <input type="text" name="location" id="location" class="cms-form__input" placeholder="event location ..."  value="{{ old('location') ?? $event['location'] ?? '' }}" required/>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form> --}}
    {{-- <div class="row">
                    <div class="col-lg-4 col-md-2 col-sm-0"></div>
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <form method="POST" name="event_form" id="event_form" action="{{ $route ?? route('cms_store_event') }}" enctype="multipart/form-data" class="cms-form">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 cms-form__field">
                                    <label for="title" class="cms-form__label">Title<span class="required">*</span></label>
                                    <input type="text" name="title" id="title" class="cms-form__input" placeholder="event title ..."  value="{{ old('title') ?? $event['title'] ?? '' }}" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 cms-form__field">
                                    <label for="location" class="cms-form__label">Location<span class="required">*</span></label>
                                    <input type="text" name="location" id="location" class="cms-form__input" placeholder="event location ..."  value="{{ old('location') ?? $event['location'] ?? '' }}" required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 cms-form__field">
                                    <label for="description" class="cms-form__label">Description</label>
                                    <textarea type="text" name="description" id="description" class="cms-form__input" placeholder="event brief ..."  value="{{ old('description') ?? $event['description'] ?? '' }}">{{ old('description') ?? $event['description'] ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 cms-form__field">
                                    <label for="start_date" class="cms-form__label">Opening Date<span class="required">*</span></label>
                                    <input type="date" name="start_date" id="start_date" class="cms-form__input" placeholder="event opening date ..."  value="{{ old('start_date') ?? $event['start_date'] ?? '' }}" required/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 cms-form__field">
                                    <label for="end_date" class="cms-form__label">Closing Date<span class="required">*</span></label>
                                    <input type="date" name="end_date" id="end_date" class="cms-form__input" placeholder="event closing date ..."  value="{{ old('end_date') ?? $event['end_date'] ?? '' }}" required/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 cms-form__field">
                                    <label for="reg_end" class="cms-form__label">Registration Due<span class="required">*</span></label>
                                    <input type="date" name="reg_end" id="reg_end" class="cms-form__input" placeholder="event registration date ..."  value="{{ old('reg_end') ?? $event['reg_end'] ?? '' }}" required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 cms-form__field">
                                    <label for="seats" class="cms-form__label">Available Seats</label>
                                    <input type="number" name="seats" id="seats" class="cms-form__input" placeholder="available seats for reservation ..."  value="{{ old('seats') ?? $event['seats'] ?? '' }}" />
                                    <small class="cms-input__caption info">Skip this field of the event is served with unlimited accomodations.</small>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 cms-form__field">
                                    <label for="price" class="cms-form__label">Price</label>
                                    <input type="number" name="price" id="price" class="cms-form__input" placeholder="price for reservation ..."  value="{{ old('price') ?? $event['price'] ?? '' }}" />
                                    <small class="cms-input__caption info">Skip this field of the event is open free of charge.</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 cms-form__field">
                                    <div class="cms-input__file">
                                        <label for="filepath" class="cms-form__label cms-file-upload__label">Upload Cover Image</label>
                                        <input type="file" name="filepath" id="filepath" accept="image/*" onchange="showPreview(event);" class="file-input" />
                                        <div class="preview">
                                            <img id="filepath-preview" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button class="bg-gray-300 hover:bg-blue-500 text-gray-800 hover:text-white font-semibold mt-5 mx-auto mr-3 py-2 px-4 rounded shadow inline-flex items-center" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293zM9 4a1 1 0 012 0v2H9V4z" />
                                    </svg>
                                    <span>Save</span>
                                </button>
                            </div>
                        </form>
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
            </fieldset>

            <fieldset>
                <legend><span class="number">2</span> Logistics Information</legend>
                <input type="number" name="seats" id="seats" class="cms-form__input" placeholder="available seats for reservation ..."  value="{{ old('seats') ?? $event['seats'] ?? '' }}" />
                <small class="cms-input__caption info">Skip this field of the event is served with unlimited accomodations.</small>

                <input type="number" name="price" id="price" class="cms-form__input" placeholder="price for reservation ..."  value="{{ old('price') ?? $event['price'] ?? '' }}" />
                <small class="cms-input__caption info">Skip this field of the event is open free of charge.</small>
            </fieldset>

            <fieldset>
                <legend><span class="number">2</span> Event Graphics</legend>
                <div class="cms-input__file">
                    <label for="filepath" class="cms-form__label cms-file-upload__label">Upload Cover Image</label>
                    <input type="file" name="filepath" id="filepath" accept="image/*" onchange="showPreview(event);" class="file-input" />
                    <div class="preview">
                        <img id="filepath-preview" />
                    </div>
                </div>
            </fieldset>

            <input type="submit" value="Save" />
        </form>
    </div>
    <!-- End Yield Page Content -->
@endsection

@extends('layouts.cms')

@section('content')
    <!-- Yield Page Content -->
    <div class="card event-form">
        <div class="card-body">
            <form method="POST" name="event_form" id="event_form" action="{{ route('cms_store_archive', [$event->id]) }}"
                enctype="multipart/form-data" class="cms-form">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-input">
                                <label for="title" class="cms-label">Title</label>
                                <input type="text" name="title" id="title" class="cms-input"
                                    value="{{ old('title') ?? ($event['title'] ?? '') }}" disabled />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-input">
                                <label for="description" class="cms-label">Event Brief</label>
                                <textarea name="description" id="description" class="cms-input"
                                    value="{{ old('description') ?? ($event['description'] ?? '') }}">{{ old('description') ?? ($event['description'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h5 style="font-size: 15px !important; margin-top: 40px !important;">UPLOAD GALLERY</h5>
                        <small class="caption">Leave these fields if you do not have any images of the
                            event.</small>
                        <small class="warning"
                            style="padding-top: 1px !important; text-transform: uppercase !important; display: block !important;">But
                            it is always better to have a gallery when archiving an event</small>
                        <hr/>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-input">
                                <label for="filepath" class="cms-form__label cms-file-upload__label">Image 1:</label>
                                <input type="file" name="gallery1" id="filepath" accept="image/*" class="file-input" />
                            </div>
                        </div>

                        <div class="col-lg-8 preview-pane">
                            <div class="preview-pane">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-input">
                                <label for="filepath" class="cms-form__label cms-file-upload__label">Image 2:</label>
                                <input type="file" name="gallery2" id="filepath" accept="image/*" class="file-input" />
                            </div>
                        </div>

                        <div class="col-lg-8 preview-pane">
                            <div class="preview-pane">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-input">
                                <label for="filepath" class="cms-form__label cms-file-upload__label">Image 3:</label>
                                <input type="file" name="gallery3" id="filepath" accept="image/*" class="file-input" />
                            </div>
                        </div>

                        <div class="col-lg-8 preview-pane">
                            <div class="preview-pane">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-input">
                                <label for="filepath" class="cms-form__label cms-file-upload__label">Image 4:</label>
                                <input type="file" name="gallery4" id="filepath" accept="image/*" class="file-input" />
                            </div>
                        </div>

                        <div class="col-lg-8 preview-pane">
                            <div class="preview-pane">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-input">
                                <label for="filepath" class="cms-form__label cms-file-upload__label">Image 5:</label>
                                <input type="file" name="gallery5" id="filepath" accept="image/*" class="file-input" />
                            </div>
                        </div>

                        <div class="col-lg-8 preview-pane">
                            <div class="preview-pane">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Yield Page Content -->

    <script>
        $(function() {
            $(document).on("change", ".file-input", function() {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader)
                    return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function() { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".preview-pane").find('.preview').css("background-image",
                            "url(" + this.result + ")");
                    }
                }

            });
        });
    </script>
@endsection

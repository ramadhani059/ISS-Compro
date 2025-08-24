@extends('layout.admin')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row align-items-center d-flex media py-4">
        <div class="col-lg-6 col-12 media-body d-none d-lg-block f-grow-1">
            <h5 class="fw-bold"><span class="text-muted fw-light">Testimoni /</span> Ubah Data</h5>
        </div>
    </div>

    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="defaultFormControlInput" class="form-label">
                        Thumbnail (PNG/JPG)
                    </label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">
                            <iconify-icon icon="bxs:file-image"></iconify-icon>
                        </span>
                        <input class="form-control @error('thumbnail') is-invalid @enderror" type="file" id="thumbnail" name="thumbnail"/>
                    </div>
                    @error('thumbnail')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        <span class="errorTxt">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="defaultFormControlInput" class="form-label">
                        Client
                    </label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">
                            <iconify-icon icon="bxs:user"></iconify-icon>
                        </span>
                        <select class="form-select client @error('project_client_id') is-invalid @enderror" id="project_client_id" name="project_client_id">
                            <option value=""></option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" {{ $testimonial->client->id == $client->id ? 'selected' : '' }}>{{ $client->name.'  -  '. $client->occupation}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('project_client_id')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            <span class="errorTxt">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12 mb-3">
                    <label for="defaultFormControlInput" class="form-label">
                        Message
                    </label>
                    <div class="input-group input-group-merge">
                        <textarea
                            id="message"
                            type="text"
                            class="form-control @error('message') is-invalid @enderror"
                            name="message"
                            placeholder="Enter Your Message"
                            aria-label="Enter Your Message"
                            aria-describedby="basic-icon-default-message2"
                            autofocus
                        >{!! $testimonial->message !!}</textarea>
                    </div>
                    @error('message')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        <span class="errorTxt">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
              </div>
              <div class="row justify-content-left mt-3 mx-1 my-1">
                <div class="col-sm-6 d-grid gap-2 mx-auto mb-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
                <div class="col-sm-6 d-grid gap-2 mx-auto mb-3">
                    <a class="btn btn-danger" data-toggle="tooltip" href="{{ route('admin.testimonials.index') }}" role="button" aria-haspopup="true" aria-expanded="false">
                        Cancel
                    </a>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
    <!-- Basic with Icons -->
</div>

@endsection

@section('script')
    <!-- AJAX -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- JS untuk Validation -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
    <script src="{{ asset('asset-new/js/validate-buku.js') }}"></script>

    {{-- <script>
        tinymce.init({
            selector: "#message",
            height: 500,
            menubar: false,
            width: "100%",
            plugins: "link lists searchreplace fullscreen hr print preview " +
                "anchor code save emoticons directionality spellchecker",

            toolbar: "cut copy | undo redo | styleselect searchplace formatselect " +
                "fullscreen | bold italic underline strikethrough " +
                "| removeformat | alignleft aligncenter " +
                "alignright alignjustify | bullist numlist outdent indent " +
                "| preview code cancel"
        });
    </script> --}}

    <script>
        $(document).ready(function () {
            $("#client").select2({
                theme: 'bootstrap4',
                placeholder: "Please Select",
            });
        });
    </script>
@endsection


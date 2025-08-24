@extends('layout.admin')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row align-items-center d-flex media py-4">
        <div class="col-lg-6 col-12 media-body d-none d-lg-block f-grow-1">
            <h5 class="fw-bold"><span class="text-muted fw-light">Landing Page / Hero Section /</span> Detail Hero Section</h5>
        </div>
    </div>

    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
              <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="card-body">
                        <img
                            class="img-fluid d-flex mx-auto"
                            style="width: 250px; height: 320px;"
                            src="{{ Storage::url($hero->banner) }}"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-8 mb-3">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <label for="defaultFormControlInput" class="form-label">
                                Heading
                            </label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <iconify-icon icon="bx:hash"></iconify-icon>
                                </span>
                                <input
                                    id="heading"
                                    type="text"
                                    class="form-control"
                                    name="heading"
                                    value="{{ $hero->heading }}"
                                    aria-describedby="basic-addon13"
                                    readonly
                                    autofocus
                                />
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="defaultFormControlInput" class="form-label">
                                Sub Heading
                            </label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <iconify-icon icon="bx:hash"></iconify-icon>
                                </span>
                                <input
                                    id="subheading"
                                    type="text"
                                    class="form-control"
                                    name="subheading"
                                    value="{{ $hero->subheading }}"
                                    aria-describedby="basic-addon13"
                                    readonly
                                    autofocus
                                />
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <label for="defaultFormControlInput" class="form-label">
                                Achievement
                            </label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <iconify-icon icon="bx:hash"></iconify-icon>
                                </span>
                                <input
                                    id="achievement"
                                    type="text"
                                    class="form-control "
                                    name="achievement"
                                    value="{{ $hero->achievement }}"
                                    aria-describedby="basic-addon13"
                                    autofocus
                                    readonly
                                />
                            </div>
                        </div>
                        <div class="col-sm-12 d-grid gap-2 mx-auto">
                            <a class="btn btn-danger" data-toggle="tooltip" href="{{ route('admin.hero_sections.index') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                Cancel
                            </a>
                        </div>
                    </div>
                </div>
              </div>
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
@endsection


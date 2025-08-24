@extends('layout.admin')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row align-items-center d-flex media py-4">
        <div class="col-lg-6 col-12 media-body d-none d-lg-block f-grow-1">
            <h5 class="fw-bold"><span class="text-muted fw-light">Landing Page / Company Stats /</span> Tambah Company Stats</h5>
        </div>
    </div>

    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-body">
            <form method="POST" action="{{ route('admin.statistics.update', $statistic) }}" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="defaultFormControlInput" class="form-label">
                        Nama
                    </label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">
                            <iconify-icon icon="bx:hash"></iconify-icon>
                        </span>
                        <input
                            id="name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            value="{{ $statistic->name }}"
                            placeholder="Enter Name"
                            aria-describedby="basic-addon13"
                            required
                            autofocus
                        />
                    </div>
                    @error('name')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        <span class="errorTxt">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="defaultFormControlInput" class="form-label">
                        Goals
                    </label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">
                            <iconify-icon icon="bx:hash"></iconify-icon>
                        </span>
                        <input
                            id="goal"
                            type="text"
                            class="form-control @error('goal') is-invalid @enderror"
                            name="goal"
                            value="{{ $statistic->goal }}"
                            placeholder="Enter goal"
                            aria-describedby="basic-addon13"
                            required
                            autofocus
                        />
                    </div>
                    @error('goal')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        <span class="errorTxt">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="col-sm-12 mb-3">
                    <label for="defaultFormControlInput" class="form-label">
                        Icon (PNG/JPG)
                    </label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">
                            <iconify-icon icon="bxs:file-image"></iconify-icon>
                        </span>
                        <input class="form-control" type="file" id="icon" name="icon"/>
                    </div>
                    @error('icon')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        <span class="errorTxt">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
              </div>
              <div class="row justify-content-left mt-3">
                <div class="col-sm-6 d-grid gap-2 mx-auto mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                <div class="col-sm-6 d-grid gap-2 mx-auto mb-3">
                    <a class="btn btn-danger" data-toggle="tooltip" href="{{ route('admin.principles.index') }}" role="button" aria-haspopup="true" aria-expanded="false">
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
@endsection


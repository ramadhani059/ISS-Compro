@extends('layout.admin')

@section('search-navbar')

{{-- <div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
      <iconify-icon icon="bx:search" class="fs-4 lh-0"></iconify-icon>
      <input
        type="text"
        class="form-control border-0 shadow-none"
        placeholder="Search..."
        aria-label="Search..."
      />
    </div>
</div> --}}

@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title mb-4 mt-4 ms-2">{{ __("You're logged in!") }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection


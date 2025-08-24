@extends('layout.admin')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-2">
            <div class="card">
                <div class="card-body mt-3 mx-2">
                    <h4 class="card-title fw-bolder text-capitalize">
                        {{ Auth::user()->name }}

                        <span><iconify-icon icon="bxs:check-shield" class="tf-icons bx text-primary mx-2" style="font-size: 30px"></iconify-icon></span>
                    </h4>
                    <p class="card-text">
                        <div class="row media">
                            <div class="col-12 text-capitalize">
                                <span><iconify-icon icon="bx:user" class="tf-icons bx"></iconify-icon></span>&nbsp;
                                    Admin
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-3 mb-2">
            <div class="card">
              <div class="card-body">
                <img
                  class="img-fluid d-flex mx-auto"
                  src="{{ asset('assets-new/img/avatars/user.jpg') }}"
                  alt="Card image cap"
                />
              </div>
              <div class="d-grid gap-2 col-lg-12 px-3 mt-1 mb-3">
                <a type="submit" href="{{ route('editmyprofile', ['id' => Auth::user()->id]) }}" data-toggle="tooltip" class="btn btn-danger text-white" style="width: 100%" >Edit Profile</a>
              </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-9 mb-2">
            <div class="card p-2">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="p-2">
                            <span class="badge bg-primary"><span><iconify-icon icon="bxs:user" class="tf-icons bx"></iconify-icon></span>&nbsp; &nbsp; Identitas User</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong>Nama Lengkap</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong>:</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <div class="px-2 py-1">
                                            {{ Auth::user()->name }}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong>Email Aktif</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong>:</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <div class="px-2 py-1">
                                            {{ Auth::user()->email }}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong>Jenis Keanggotaan</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong>:</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <div class="px-2 py-1">
                                            Admin
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong>Status Keanggotaan</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong>:</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <div class="px-2 py-1">
                                            <span class="badge bg-primary me-2">Active</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="p-2">
                            <span class="badge bg-dark"><span><iconify-icon icon="bxs:user" class="tf-icons bx"></iconify-icon></span>&nbsp; &nbsp; Data Contact Perusahaan</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <form action="{{ route('updatecompanycontact', ['id' => 1]) }}" method="POST" enctype="multipart/form-data" id="registerForm">
                        @csrf
                        @method('put')
                        <table>
                            <tbody>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong>No Whatsapp</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong>:</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <input
                                            id="phone"
                                            type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            name="phone"
                                            placeholder="name@example.com"
                                            aria-describedby="basic-addon13"
                                            value="{{ $contact->phone }}"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong>Content</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong>:</strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <div class="input-group input-group-merge">
                                            <textarea
                                                id="content"
                                                type="text"
                                                class="form-control @error('content') is-invalid @enderror"
                                                name="content"
                                                placeholder="Enter Your Content"
                                                aria-label="Enter Your Content"
                                                aria-describedby="basic-icon-default-message2"
                                                autofocus
                                            >{!! $contact->content !!}</textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-3 col-4 align-top">
                                        <div class="px-2 py-1">
                                            <strong></strong>
                                        </div>
                                    </td>
                                    <td class="col-md-1 col-1 align-top">
                                        <div class="px-2 py-1">
                                            <strong></strong>
                                        </div>
                                    </td>
                                    <td class="col-md-8 col-7 align-top">
                                        <div class="d-grid gap-2 col-lg-3">
                                            <button class="btn btn-primary btn-sm text-white" type="submit">Update</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card">
        <h5 class="card-header">Delete Account</h5>
        <div class="card-body">
          <div class="mb-3 col-12 mb-0">
            <div class="alert alert-danger">
              <h6 class="alert-heading fw-bold mb-1">Apakah anda yakin untuk menonaktifkan akun ini ?</h6>
              <p class="mb-0">Setelah anda menonaktifkan akun, anda tidak dapat masuk kedalam sistem lagi !!!</p>
            </div>
          </div>
          <form action="{{ route('nonactiveaccount', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data" id="registerForm">
            @csrf
            @method('put')
            <div class="form-check mb-3">
              <input
                class="form-check-input"
                type="checkbox"
                name="accountActivation"
                value=1
                id="accountActivation"
                required
              />
              <label class="form-check-label" for="accountActivation"
                >Saya setuju ingin menonaktifkan akun</label
              >
            </div>
            <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
          </form>
        </div>
    </div> --}}
</div>

@endsection

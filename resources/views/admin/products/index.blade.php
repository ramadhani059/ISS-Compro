@extends('layout.admin')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row align-items-center d-flex media py-4">
        <div class="col-lg-6 col-12 media-body d-none d-lg-block f-grow-1">
            <h5 class="fw-bold"><span class="text-muted fw-light"></span> Our Products</h5>
        </div>
        <div class="col-lg-6 col-12 text-end">
            <a class="btn btn-sm btn-primary" data-toggle="tooltip" href="{{ route('admin.products.create' )}}" role="button" aria-haspopup="true" aria-expanded="false">
                <span><iconify-icon icon="bx:plus" class="tf-icons bx"></iconify-icon></span>&nbsp; Add
            </a>
        </div>
    </div>

    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table table-hover mt-3 mb-3 datatable">
            <thead>
              <tr class="text-nowrap">
                <th><strong>No.</strong></th>
                <th><strong>Thumbnail</strong></th>
                <th><strong>Name</strong></th>
                <th><strong>Tagline</strong></th>
                <th><strong>About</strong></th>
                <th><strong>Create Date</strong></th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($products as $product)
              <tr class="text-nowrap">
                <td><strong>{{ $loop->iteration }}</strong></td>
                <td>
                    <img
                        class="img-fluid d-flex"
                        style="width: 100px;"
                        src="{{ Storage::url($product->thumbnail) }}"
                        alt="Hero Section"
                    />
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->tagline }}
                </td>
                <td>
                    <?php echo \Illuminate\Support\Str::limit(strip_tags($product->about), 30, $end='...') ?>
                </td>
                <td>
                    {{ $product->created_at->format('M d, Y') }}
                </td>
                <td>
                    <div class="d-flex">
                        {{-- <a class="btn btn-icon btn-sm btn-primary me-2" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>Show</span>" href="{{ route('admin.statistics.show', ['statistic' => $statistic->id]) }}" role="button" aria-haspopup="true" aria-expanded="false">
                            <span><iconify-icon icon="bx:show" class="tf-icons bx"></iconify-icon></span>
                        </a> --}}
                        <a class="btn btn-icon btn-sm btn-primary me-2" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>Edit</span>" href="{{ route('admin.products.edit', ['product' => $product->id]) }}" role="button" aria-haspopup="true" aria-expanded="false">
                            <span><iconify-icon icon="bx:edit" class="tf-icons bx"></iconify-icon></span>
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>Delete</span>" class="btn btn-icon btn-sm btn-danger" data-name="{{ $product->name }}" ><span><iconify-icon icon="bx:trash" class="tf-icons bx"></iconify-icon></span></button>
                        </form>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>

@endsection

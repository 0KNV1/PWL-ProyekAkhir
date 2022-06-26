@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Produk List</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Produk Management</h2>

            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Produk List</h4>
                            <div class="card-header-action">
                                <a class="btn btn-icon icon-left btn-primary" href="{{ route('produk.create') }}">Create New
                                    Produk</a>
                                <a class="btn btn-info btn-primary active import">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Import Produk</a>
                                <a class="btn btn-info btn-primary active" href="{{ route('produk.export') }}">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                    Export Produk</a>
                                <a class="btn btn-info btn-primary active search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Search Produk</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="show-import" style="display: none">
                                <div class="custom-file">
                                    <form action="{{ route('produk.import') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label class="custom-file-label" for="file-upload">Choose File</label>
                                        <input type="file" id="file-upload" class="custom-file-input" name="import_file">
                                        <br /> <br />
                                        <div class="footer text-right">
                                            <button class="btn btn-primary">Import File</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="show-search mb-3" style="display: none">
                                <form id="search" method="GET" action="{{ route('produk.index') }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">Produk</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Produk Name">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <a class="btn btn-secondary" href="{{ route('produk.index') }}">Reset</a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Image Background</th>
                                            <th>Stok</th>
                                            <th>description</th>
                                            <th>Created At</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        @foreach ($produks as $key => $produk)
                                            <tr>
                                                <td>{{ ($produks->currentPage() - 1) * $produks->perPage() + $key + 1 }}</td>
                                                <td>{{ $produk->name }}</td>
                                                <td>{{ $produk->price}}</td>
                                                <td>{{ $produk->image}}</td>
                                                <td>{{ $produk->background}}</td>
                                                <td>{{ $produk->stok}}</td>
                                                <td>{{ $produk->desc}}</td>
                                                <td>{{ $produk->created_at}}</td>
                                                <td class="text-right">
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('produk.edit', $produk->id) }}"
                                                            class="btn btn-sm btn-info btn-icon "><i
                                                                class="fas fa-edit"></i>
                                                            Edit</a>
                                                        <form action="{{ route('produk.destroy', $produk->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
                                                            <button class="btn btn-sm btn-danger btn-icon "><i
                                                                    class="fas fa-times"></i> Delete </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $produks->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customScript')
    <script>
        $(document).ready(function() {
            $('.import').click(function(event) {
                event.stopPropagation();
                $(".show-import").slideToggle("fast");
                $(".show-search").hide();
            });
            $('.search').click(function(event) {
                event.stopPropagation();
                $(".show-search").slideToggle("fast");
                $(".show-import").hide();
            });
            //ganti label berdasarkan nama file
            $('#file-upload').change(function() {
                var i = $(this).prev('label').clone();
                var file = $('#file-upload')[0].files[0].name;
                $(this).prev('label').text(file);
            });
        });
    </script>
@endpush

@push('customStyle')
@endpush

@extends('layouts.app')

@section('title', 'Permissions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile Perusahaan</h1>
                {{-- <div class="section-header-button">
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add New</a>
                </div> --}}
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Profile Perusahaan</a></div>
                    <div class="breadcrumb-item">All Profile Perusahaan</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Permissions</h2>
                <p class="section-lead">
                    You can manage all Profile Perusahaan, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Profile Perusahaan</h4>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="{{ route('company.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search by name" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>Email Perusahaan</th>
                                            <th>Radius KM</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Waktu Masuk</th>
                                            <th>Waktu Pulang</th>

                                            <th>Action</th>
                                        </tr>
                                        @foreach ($companies as $company)
                                            <tr>

                                                <td>{{ $company->name }}</td>
                                                <td>{{ $company->address }}</td>
                                                <td>{{ $company->email }}</td>
                                                <td>{{ $company->radius_km }} KM</td>
                                                <td>{{ $company->latitude }}</td>
                                                <td>{{ $company->longitude }}</td>
                                                <td>{{ $company->time_in }}</td>
                                                <td>{{ $company->time_out }}</td>

                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('companies.show', $company->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Detail
                                                        </a>

                                                        <form action="{{ route('companies.destroy', $company->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $companies->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush

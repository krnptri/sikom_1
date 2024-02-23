@extends('_template_back.layout')

@section('content')
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Hi, welcome back!</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Basic Tables</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->

<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex d-flex my-auto btn-list justify-content-end">
                    <a href="{{ route('ulasan_buku.create') }}" class="btn btn-primary">Tambah Data</a>
                    <a href="{{ route('export_excel_buku') }}" class="btn btn-danger">Export Excel</a>
                    <a href="{{ route('export_pdf_buku') }}" class="btn btn-warning">Export PDF</a>
                    <a class="modal-effect btn btn-dark" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8"><i class="fas fa-download"></i> Import Excel</a>
                </div>
                @include('_component.message')
            </div>
            <div class="card-body mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peminjam</th>
                                <th>Buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }} </th>
                                <td> {{ $dt->user->name }} </td>
                                <td> {{ $dt->buku->judul }} </td>
                                <td> {{ $dt->tanggal_peminjaman }} </td>
                                <td> {{ $dt->tanggal_pengembalian }} </td>
                                <td> {{ $dt->status_peminjaman }} </td>
                                <td>
                                    <a href="{{ route('ulasan_buku.edit', $dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form onsubmit="return confirm('Apakah anda yakin ingin hapus data ini?')" action="{{ route('ulasan_buku.destroy', $dt->id) }}" method="post" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('peminjaman.modal_import')

@endsection

@extends('layouts.master')

@section('title', 'Unit Produksi')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Data Produksi</h4>
                                <a href="{{ route('produksi.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                    <span>Tambah Data Produksi</span>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr class="text-center text-dark">
                                            <th>No</th>
                                            <th>Jenis Produksi</th>
                                            <th>Jumlah Produksi</th>
                                            <th>Tgl Produksi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    <tbody>
                                        @foreach ($produksi as $p)
                                            <tr class="text-center text-dark">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->jenis_produksi }}</td>
                                                <td>{{ $p->jumlah_produksi }}</td>
                                                <td>{{ $p->tgl_produksi }}</td>
                                                <td>{{ $p->keterangan }}</td>
                                                <td>
                                                    <a href="{{ route('produksi.edit', $p->id) }}"
                                                        class="btn btn-primary btn-sm" style="border-radius:5px">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span style="margin-right: 5px"></span>
                                                    <form action="{{ route('produksi.destroy', $p->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" style="border-radius:5px"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data bahan masuk ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

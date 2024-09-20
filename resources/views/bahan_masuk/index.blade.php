@extends('layouts.master')

@section('title', 'Home')

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
                                <h4 class="card-title">Data Bahan Masuk</h4>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                    <span>Tambah Data Bahan Masuk</span>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Distributor</th>
                                            <th>Tgl Masuk</th>
                                            <th>Jumlah KG</th>
                                            <th>Jumlah Gram</th>
                                            <th>Total Harga</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($bahan as $b)
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $b->nama_bahan }}</td>
                                                <td>{{ $b->supplier_id }}</td>
                                                <td>{{ $b->tgl_masuk }}</td>
                                                <td>{{ $b->harga_total }}</td>
                                                <td>{{ $b->harga_per_kg }}</td>
                                                <td>{{ $b->harga_per_g }}</td>
                                                <td>{{ $b->keterangan }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm" style="border-radius:5px">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span style="margin-right: 5px"></span>
                                                    <button class="btn btn-danger btn-sm" style="border-radius:5px">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
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
        </div>
    </div>
@endsection

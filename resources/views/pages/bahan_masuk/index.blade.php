@extends('layouts.master')

@section('title', 'Stok Masuk')

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
                                <a href="{{ route('bahan_masuk.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                    <span>Tambah Data Bahan Masuk</span>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="color: black">No</th>
                                            <th style="color: black">Kode Bahan</th>
                                            <th style="color: black">Distributor</th>
                                            <th style="color: black">Nama Bahan</th>
                                            <th style="color: black">Tgl Masuk</th>
                                            <th style="color: black">Jumlah KG</th>
                                            <th style="color: black">Jumlah Gram</th>
                                            <th style="color: black">Total Harga</th>
                                            <th style="color: black">Stok Masuk</th>
                                            <th style="color: black">Keterangan</th>
                                            <th style="color: black">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bahan as $b)
                                            <tr class="text-center">
                                                <td style="color: black">{{ $loop->iteration }}</td>
                                                <td style="color: black">{{ $b->supplier->kode_supplier }}</td>
                                                <td style="color: black">{{ $b->supplier->nama_supplier }}</td>
                                                <td style="color: black">{{ $b->supplier->nama_bahan }}</td>
                                                <td style="color: black">{{ $b->tgl_masuk }}</td>
                                                <td style="color: black">{{ $b->harga_per_kg }}</td>
                                                <td style="color: black">{{ $b->harga_per_g }}</td>
                                                <td style="color: black">{{ $b->harga_total }}</td>
                                                <td style="color: black">{{ $b->supplier->stok }}</td>
                                                <td style="color: black">{{ $b->keterangan }}</td>
                                                <td>
                                                    <a href="{{ route('bahan_masuk.edit', $b->id) }}" class="btn btn-primary btn-sm"
                                                        style="border-radius:5px">
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

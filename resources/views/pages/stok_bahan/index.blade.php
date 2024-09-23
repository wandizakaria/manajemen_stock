@extends('layouts.master')

@section('title', 'Stok Bahan')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('stok_bahan.index') }}">Stok Bahan</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                             <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Data Stok Bahan</h4>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                    <span>Tambah Data Stok Bahan</span>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Jenis Bahan</th>
                                            <th>Jumlah Gram</th>
                                            <th>Jumlah Keluar</th>
                                            <th>Tgl Keluar</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($stokbahan as $s) --}}
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                                <td>
                                                    <form action="">
                                                        <a href="" class="btn btn-primary btn-sm" style="border-radius:5px">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <span style="margin-right: 5px"></span>
                                                        <button class="btn btn-danger btn-sm" style="border-radius:5px">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        {{-- @endforeach --}}
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

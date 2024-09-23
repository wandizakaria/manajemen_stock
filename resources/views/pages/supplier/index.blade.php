@extends('layouts.master')

@section('title', 'Supplier')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('supplier.index') }}">Suppliers</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Data Supplier</h4>
                                <a href="{{ route('supplier.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                    <span>Tambah Data Supplier</span>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="color: black">No</th>
                                            <th style="color: black">Kode Supplier</th>
                                            <th style="color: black">Nama Supplier</th>
                                            <th style="color: black">Alamat</th>
                                            <th style="color: black">No Telepon</th>
                                            <th style="color: black">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($supplier as $s)
                                            <tr class="text-center">
                                                <td style="color: black">{{ $loop->iteration }}</td>
                                                <td style="color: black">{{ $s->kode_supplier }}</td>
                                                <td style="color: black">{{ $s->nama_supplier }}</td>
                                                <td style="color: black">{{ $s->alamat }}</td>
                                                <td style="color: black">{{ $s->no_telepon }}</td>
                                                <td>
                                                    <a href="{{ route('supplier.edit', $s->id) }}"
                                                        class="btn btn-primary btn-sm" style="border-radius:5px">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span style="margin-right: 5px"></span>
                                                    <form action="{{ route('supplier.destroy', $s->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" style="border-radius:5px"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
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
        </div>
    </div>
@endsection

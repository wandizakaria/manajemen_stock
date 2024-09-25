@extends('layouts.master')

@section('title', 'Create Supplier')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('supplier.index') }}">Data Supplier</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('supplier.create') }}">create</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Supplier</h4>
                            <div class="basic-form">
                                <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Menambahkan metode PUT untuk pembaruan -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="kode_supplier">Kode Supplier</label>
                                            <input type="text" class="form-control" id="kode_supplier"
                                                name="kode_supplier" placeholder="Enter Kode Supplier"
                                                value="{{ old('kode_supplier', $supplier->kode_supplier) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama_supplier">Nama Supplier</label>
                                            <input type="text" class="form-control" id="nama_supplier"
                                                name="nama_supplier" placeholder="Enter Nama Supplier"
                                                value="{{ old('nama_supplier', $supplier->nama_supplier) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                placeholder="Enter Alamat" value="{{ old('alamat', $supplier->alamat) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="no_telepon">No Telepon</label>
                                            <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                                placeholder="Enter No Telepon"
                                                value="{{ old('no_telepon', $supplier->no_telepon) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama_bahan" style="color: black">Nama Bahan</label>
                                            <input type="text" class="form-control" id="nama_bahan" name="nama_bahan"
                                                style="color: black; border-radius: 10px" placeholder="Enter Nama Bahan"
                                                value="{{ old('nama_bahan', $supplier->nama_bahan) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="stok" style="color: black">Stok</label>
                                            <input type="text" class="form-control" id="stok" name="stok"
                                                style="color: black; border-radius: 10px" placeholder="Enter Stok"
                                                value="{{ old('stok', $supplier->stok) }}" style="border-radius: 10px"
                                                required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('supplier.index') }}" class="btn btn-danger ms-auto">Kembali</a>
                                        <span style="margin-right: 5px"></span>
                                        <button type="submit" class="btn btn-primary ms-auto">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

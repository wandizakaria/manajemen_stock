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
                                <form action="{{ route('supplier.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="kode_supplier" style="color: black">Kode Supplier</label>
                                            <input type="text" class="form-control" id="kode_supplier" style="color: black"
                                                name="kode_supplier" placeholder="Enter Kode Supplier"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama_supplier" style="color: black">Nama Supplier</label>
                                            <input type="text" class="form-control" id="nama_supplier" style="color: black"
                                                name="nama_supplier" placeholder="Enter Nama Supplier"
                                                style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="alamat" style="color: black">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" style="color: black"
                                                placeholder="Enter Alamat" style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="no_telepon" style="color: black">No Telepon</label>
                                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" style="color: black"
                                                placeholder="Enter No Telepon" style="border-radius: 10px" required>
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

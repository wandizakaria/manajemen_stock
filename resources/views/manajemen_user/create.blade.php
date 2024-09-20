@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('manajemen_user.index') }}">Manajemen User</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('manajemen_user.create') }}">create</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data User</h4>
                            <div class="basic-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Nama" style="border-radius: 10px">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
                                            <input type="password" class="form-control" id="username" name="username"
                                                placeholder="Enter Username" style="border-radius: 10px">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Level</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Nama" style="border-radius: 10px">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="username">Password</label>
                                            <input type="password" class="form-control" id="username" name="username"
                                                placeholder="Enter Username" style="border-radius: 10px">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('manajemen_user.index') }}" class="btn btn-danger ms-auto">Kembali</a>
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

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
                            <h4 class="card-title">Data Table</h4>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@mdo">Tambah Data</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama
                                                        User:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jabatan:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                style="border-radius:10px">Batal</button>
                                            <button type="button" class="btn btn-primary"
                                                style="border-radius:10px">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>{{ $u->password }}</td>
                                                <td>{{ $u->level }}</td>
                                                <td>
                                                    <form action="">
                                                        <a href="" class="btn btn-primary"
                                                            style="border-radius:10px">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
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

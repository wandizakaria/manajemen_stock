@extends('layouts.master')

@section('title', 'Manajemen User')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Manajemen User</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Data User</h4>
                                <a href="{{ route('manajemen_user.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                    <span>Tambah Data</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr class="text-center text-dark">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <br>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                            <tr class="text-center text-dark">
                                                <td style="color: black">{{ $loop->iteration }}</td>
                                                <td style="color: black">{{ $u->name }}</td>
                                                <td style="color: black">{{ $u->username }}</td>
                                                <td style="color: black">{{ $u->level }}</td>
                                                <td>
                                                    <form action="{{ route('manajemen_user.destroy', $u->id) }}"
                                                        method="POST" class="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('manajemen_user.edit', $u->id) }}"
                                                            class="btn btn-primary btn-sm" style="border-radius:5px">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            style="border-radius:5px ">
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

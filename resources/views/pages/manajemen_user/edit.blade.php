@extends('layouts.master')

@section('title', 'Edit Data User')

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
                                <form action="{{ route('manajemen_user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Method PUT untuk update -->

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Nama" value="{{ old('name', $user->name) }}"
                                                style="border-radius: 10px">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Enter Username" value="{{ old('username', $user->username) }}"
                                                style="border-radius: 10px">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="level">Level</label>
                                            <select id="level" name="level" class="form-control"
                                                style="border-radius: 10px">
                                                <option>--pilih--</option>
                                                @foreach ($levels as $level)
                                                    <option value="{{ $level }}"
                                                        {{ $level == $user->level ? 'selected' : '' }}>
                                                        {{ $level }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Enter Password"
                                                    style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="togglePassword"
                                                        style="cursor: pointer; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah
                                                password.</small>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('manajemen_user.index') }}"
                                            class="btn btn-danger ms-auto">Kembali</a>
                                        <span style="margin-right: 5px"></span>
                                        <button type="submit" class="btn btn-primary ms-auto">Update</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');

            // Toggle tipe input password
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
@endsection

@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card" style="background: linear-gradient(to right, #86cce4, #FF00B3); color: #333;">
                        <div class="card-body">
                            <h3 class="card-title" style="color: #ffffff;">Data User</h3>
                            <div class="d-inline-block">
                                <h2 style="color: #ffffff;">0</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"
                                    style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card" style="background: linear-gradient(to right, #86cce4, #FF00B3);">
                        <div class="card-body">
                            <h3 class="card-title text-white" style="color: #ffffff;">Bahan Masuk</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-box" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card" style="background: linear-gradient(to right, #86cce4, #FF00B3);">
                        <div class="card-body">
                            <h3 class="card-title text-white">Stok Bahan</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-cube" style="color: white"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card" style="background: linear-gradient(to right, #86cce4, #FF00B3);">
                        <div class="card-body">
                            <h3 class="card-title text-white">Produksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-truck" style="color: white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

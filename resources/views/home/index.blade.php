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
                                <h2 style="color: #ffffff;">{{ $user }}</h2>
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
                                <h2 class="text-white">{{ $bahan }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-box"
                                    style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card" style="background: linear-gradient(to right, #86cce4, #FF00B3);">
                        <div class="card-body">
                            <h3 class="card-title text-white">Stok Bahan</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $stok_bahan }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-cube"
                                    style="color: white"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card" style="background: linear-gradient(to right, #86cce4, #FF00B3);">
                        <div class="card-body">
                            <h3 class="card-title text-white">Produksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $produksi }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-truck"
                                    style="color: white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Stok Mencapai Batas Minimum</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle">
                            <thead>
                                <tr class="text-center text-dark">
                                    <th>No</th>
                                    <th>Nama Bahan</th>
                                    <th>Stok Bahan</th>
                                    <th>Tanggal</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td style="color:black">1</td>
                                    <td style="color:black">Terigu</td>
                                    <td><span class="label gradient-1 btn-rounded">70%</span>
                                    </td>
                                    <td style="color:black">Apr 20,2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection

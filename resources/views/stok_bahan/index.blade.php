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
                                                        Bahan:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jenis Bahan:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jumlah Gram:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jumlah
                                                        Keluar:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Tgl Keluar:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Keterangan:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>






                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
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
                                            <th>Nama Bahan</th>
                                            <th>Jenis Bahan</th>
                                            <th>Jumlah Gram</th>
                                            <th>Jumlah Keluar</th>
                                            <th>Tgl Keluar</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

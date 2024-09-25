@extends('layouts.master')

@section('title', 'Edit Produksi')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('produksi.index') }}">Produksi</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Data Produksi</h4>
                            <div class="basic-form">
                                <form action="{{ route('produksi.update', $produksi->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="jenis_produksi" style="color: black">Jenis Produksi</label>
                                            <input type="text" class="form-control" id="jenis_produksi"
                                                name="jenis_produksi" placeholder="Enter Jenis Produksi"
                                                value="{{ old('jenis_produksi', $produksi->jenis_produksi) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="jumlah_produksi" style="color: black">Jumlah Produksi</label>
                                            <input type="text" class="form-control" id="jumlah_produksi"
                                                name="jumlah_produksi" placeholder="Enter Jumlah Produksi"
                                                value="{{ old('jumlah_produksi', $produksi->jumlah_produksi) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tgl_produksi" style="color: black">Tanggal Produksi</label>
                                            <input type="date" class="form-control" id="tgl_produksi" name="tgl_produksi"
                                                value="{{ old('tgl_produksi', $produksi->tgl_produksi) }}"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="keterangan" style="color: black">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Enter Keterangan"
                                                style="border-radius: 10px;" required>{{ old('keterangan', $produksi->keterangan) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('produksi.index') }}" class="btn btn-danger ms-auto">Kembali</a>
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
    <script>
        function formatInput(inputElement) {
            inputElement.addEventListener('input', function(e) {
                let value = this.value.replace(/\./g, ''); // Remove existing dots
                if (!isNaN(value) && value !== '') {
                    this.value = new Intl.NumberFormat('id-ID').format(value); // Format with dots
                }
            });

            inputElement.addEventListener('keydown', function(e) {
                // Allow only numbers, backspace, delete, and enter
                if (!/^[0-9\b]+$/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete' && e.key !== 'Enter') {
                    e.preventDefault();
                }
            });
        }

        const hargaPerKgInput = document.getElementById('harga_per_kg');
        const hargaPerGInput = document.getElementById('harga_per_g');
        const hargaTotalInput = document.getElementById('harga_total');

        // Apply the formatting function to all fields
        formatInput(hargaPerKgInput);
        formatInput(hargaPerGInput);
        formatInput(hargaTotalInput);
    </script>

@endsection

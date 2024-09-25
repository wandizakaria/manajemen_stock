@extends('layouts.master')

@section('title', 'Create Stok Bahan')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('stok_bahan.index') }}">Stok Bahan</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('stok_bahan.create') }}">create</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Stok Bahan</h4>
                            <div class="basic-form">
                                <form action="{{ route('stok_bahan.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="bahan_id">Nama Bahan</label>
                                            <select class="form-control" id="bahan_id" name="bahan_id"
                                                style="border-radius: 10px" required>
                                                <option value="">Pilih Nama Bahan</option>
                                                @foreach ($bahan_masuk as $bahan)
                                                    <option value="{{ $bahan->id }}">{{ $bahan->supplier->nama_bahan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="jenis_id">Jenis Bahan</label>
                                            <input type="text" class="form-control" id="jenis_id" name="jenis_id"
                                                placeholder="Enter Jenis Bahan" style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="jumlah_gram">Jumlah Per Gram</label>
                                            <input type="text" class="form-control" id="jumlah_gram" name="jumlah_gram"
                                                placeholder="Enter Jumlah Per Gram" style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="jumlah_keluar">Jumlah Keluar</label>
                                            <input type="text" class="form-control" id="jumlah_keluar"
                                                name="jumlah_keluar" placeholder="Enter Jumlah Keluar"
                                                style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tgl_keluar">Tanggal Keluar</label>
                                            <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Enter Keterangan"
                                                style="border-radius: 10px;" required></textarea>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('stok_bahan.index') }}" class="btn btn-danger ms-auto">Kembali</a>
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

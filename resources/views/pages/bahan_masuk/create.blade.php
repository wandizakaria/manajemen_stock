@extends('layouts.master')

@section('title', 'Create Stok Masuk')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('bahan_masuk.index') }}">Stok Masuk</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('bahan_masuk.create') }}">create</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Stok Masuk</h4>
                            <div class="basic-form">
                                <form action="{{ route('bahan_masuk.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="bahan_id" style="color: black">Kode Bahan</label>
                                            <select class="form-control" id="bahan_id" name="bahan_id" style="color: black"
                                                style="border-radius: 10px" required>
                                                <option value="">Pilih Kode Bahan</option>
                                                @foreach ($supplier as $s)
                                                    <option value="{{ $s->id }}">{{ $s->kode_supplier }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="bahan-id" style="color: black">Distributor</label>
                                            <select class="form-control" id="bahan_id" name="bahan_id" style="color: black"
                                                style="border-radius: 10px" required>
                                                <option value="">Pilih Distributor</option>
                                                @foreach ($supplier as $s)
                                                    <option value="{{ $s->id }}">
                                                        {{ $s->nama_supplier }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="bahan_id" style="color: black">Nama Bahan</label>
                                            <select class="form-control" id="bahan_id" name="bahan_id" style="color: black"
                                                style="border-radius: 10px" required>
                                                <option value="">Pilih Nama Bahan</option>
                                                @foreach ($supplier as $s)
                                                    <option value="{{ $s->id }}">{{ $s->nama_bahan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tgl_masuk" style="color: black">Tanggal Masuk</label>
                                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                                placeholder="Enter Nama Bahan" style="border-radius: 10px; color: black"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="harga_per_kg" style="color: black">Jumlah Per Kg</label>
                                            <input type="text" class="form-control" id="harga_per_kg" name="harga_per_kg"
                                                placeholder="Enter Jumlah Per Kg" style="border-radius: 10px; color: black"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="harga_per_g" style="color: black">Jumlah Per Gram</label>
                                            <input type="text" class="form-control" id="harga_per_g" name="harga_per_g"
                                                placeholder="Enter Jumlah Per Gram"
                                                style="border-radius: 10px; color: black" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="harga_total" style="color: black">Total Harga</label>
                                            <input type="text" class="form-control" id="harga_total" name="harga_total"
                                                placeholder="Enter Total Harga" style="border-radius: 10px; color: black"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="supplier_id" style="color: black">Stok Masuk</label>
                                            <select class="form-control" id="supplier_id" name="supplier_id"
                                                style="color: black" style="border-radius: 10px" required>
                                                <option value="">Pilih Stok</option>
                                                @foreach ($supplier as $s)
                                                    <option value="{{ $s->id }}">{{ $s->stok }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="keterangan" style="color: black">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Enter Keterangan"
                                                style="border-radius: 10px;" required></textarea>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('bahan_masuk.index') }}"
                                            class="btn btn-danger ms-auto">Kembali</a>
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

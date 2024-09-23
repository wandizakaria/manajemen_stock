@extends('layouts.master')

@section('title', 'Create Data Bahan')

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('bahan_masuk.index') }}">Data Bahan</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('bahan_masuk.create') }}">create</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Bahan Masuk</h4>
                            <div class="basic-form">
                                <form action="{{ route('bahan_masuk.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="kode_bahan">Kode Bahan</label>
                                            <input type="text" class="form-control" id="kode_bahan" name="kode_bahan"
                                                placeholder="Enter Nama Bahan" style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="supplier_id">Distributor</label>
                                            <input type="text" class="form-control" id="supplier_id" name="supplier_id"
                                                placeholder="Enter Distributor" style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama_bahan">Nama Bahan</label>
                                            <input type="text" class="form-control" id="nama_bahan" name="nama_bahan"
                                                placeholder="Enter Nama Bahan" style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="jenis_bahan_id">Jenis Bahan</label>
                                            <input type="text" class="form-control" id="jenis_bahan_id"
                                                name="jenis_bahan_id" placeholder="Enter Nama Bahan"
                                                style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tgl_masuk">Tanggal Masuk</label>
                                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                                placeholder="Enter Nama Bahan" style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="harga_per_kg">Jumlah Per Kg</label>
                                            <input type="text" class="form-control" id="harga_per_kg" name="harga_per_kg"
                                                placeholder="Enter Jumlah Per Kg" style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="harga_per_g">Jumlah Per Gram</label>
                                            <input type="text" class="form-control" id="harga_per_g" name="harga_per_g"
                                                placeholder="Enter Jumlah Per Gram" style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="harga_total">Total Harga</label>
                                            <input type="text" class="form-control" id="harga_total" name="harga_total"
                                                placeholder="Enter Total Harga" style="border-radius: 10px" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="stok_bahan_id">Stok Masuk</label>
                                            <input type="text" class="form-control" id="stok_bahan_id"
                                                name="stok_bahan_id" placeholder="Enter Total Harga"
                                                style="border-radius: 10px" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Enter Keterangan"
                                                style="border-radius: 10px; height: 46px;" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Input hidden untuk alamat dan no_telepon -->
                                    <input type="hidden" name="alamat" value="alamat_supplier_default">
                                    <!-- Ganti dengan nilai yang sesuai -->
                                    <input type="hidden" name="no_telepon" value="no_telepon_supplier_default">
                                    <!-- Ganti dengan nilai yang sesuai -->
                                    <input type="hidden" name="kode_supplier" value="kode_supplier_default">
                                    
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
    <script>
        const hargaTotalInput = document.getElementById('harga_total');

        hargaTotalInput.addEventListener('input', function(e) {
            let value = this.value.replace(/\./g, ''); // Menghapus titik yang sudah ada
            // Pastikan nilai adalah angka
            if (!isNaN(value) && value !== '') {
                // Memformat angka dengan titik sebagai pemisah ribuan
                this.value = new Intl.NumberFormat('id-ID').format(value);
            }
        });

        hargaTotalInput.addEventListener('keydown', function(e) {
            // Mengizinkan angka, backspace, delete, dan enter
            if (!/^[0-9\b]+$/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete' && e.key !== 'Enter') {
                e.preventDefault();
            }
        });
    </script>
@endsection


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
                        <form action="{{ route('bahan_masuk.store') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h4>Tambah Bahan</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Bahan</label>
                                    <input type="text" class="form-control" name="product_name" id="ptoduct_name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Distributor</label>
                                    <input type="text" class="form-control" name="distributor" id="distributor" required>
                                </div>
                                <div class="form-group">
                                    <label>Tgl Masuk</label>
                                    <input type="number" class="form-control" name="tgl_masuk" id="tgl_masuk" required>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah KG</label>
                                    <input type="number" class="form-control" name="jumlah_kg" id="jumlah_kg" required>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Gram</label>
                                    <input type="number" class="form-control" name="jumlah_gram" id="jumlah_gram" required>
                                </div>
                                <div class="form-group">
                                    <label>Total Harga</label>
                                    <input type="number" class="form-control" name="total_harga" id="total_harga" required>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

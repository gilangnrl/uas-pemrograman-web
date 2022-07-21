@extends('layouts.admin.master')

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Barang</div>
                    </div>
                    <form method="POST" action="{{ route('store-product') }}" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                {{ csrf_field() }}
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="namaBarang" class="col-md-3 col-form-label">Nama Barang</label>

                                        <input type="text" class="form-control" name="product_name" id="namaBarang"
                                            placeholder="Nama" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Deskripsi
                                            Barang</label>

                                        <input type="text" class="form-control" name="product_description"
                                            id="inlineinput" placeholder="Deskripsi" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Kode Barang</label>

                                        <input type="text" class="form-control" name="product_code" id="inlineinput"
                                            placeholder="Kode Barang" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Harga Barang</label>

                                        <input type="number" class="form-control" name="product_price" id="inlineinput"
                                            placeholder="Harga" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Jumlah Stok Yang
                                            Tersedia</label>

                                        <input type="number" class="form-control" name="product_stock" id="inlineinput"
                                            placeholder="Stok" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Supplier</label>

                                        <input type="text" class="form-control" name="product_supplier" id="inlineinput"
                                            placeholder="Supplier" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="basic-url">Url Foto Barang</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Image URL</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="img_url">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Tambah">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

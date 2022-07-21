@extends('layouts.admin.master')

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Barang</div>
                    </div>
                    <form method="POST" action="{{ route('update-product', $product->id) }}" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Nama Barang</label>
                                        <input value="{{ $product->product_name }}" type="text" class="form-control"
                                            name="product_name" id="inlineinput" placeholder="Ex: Xiaomi, Samsung, dll..."
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Deskripsi Barang</label>
                                        <input value="{{ $product->product_description }}" type="text"
                                            class="form-control" name="product_description" id="inlineinput"
                                            placeholder="Ex: Hape ini adalah..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Kode Barang</label>
                                        <input value="{{ $product->product_code }}" type="text" class="form-control"
                                            name="product_code" id="inlineinput" placeholder="Ex: 12000000" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Harga Barang</label>
                                        <input value="{{ $product->product_price }}" type="text" class="form-control"
                                            name="product_price" id="inlineinput" placeholder="Ex: 12000000" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Jumlah Stok Yang
                                            Tersedia</label>
                                        <input value="{{ $product->product_stock }}" type="text" class="form-control"
                                            name="product_stock" id="inlineinput" placeholder="Ex: 12" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Supplier</label>
                                        <input value="{{ $product->product_supplier }}" type="text" class="form-control"
                                            name="product_supplier" id="inlineinput" placeholder="Ex: Xiaomi Inc." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic-url">Url Foto Barang</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Image URL</span>
                                            </div>
                                            <input value="{{ $product->img_url }}" type="text" class="form-control" id="basic-url"
                                                aria-describedby="basic-addon3" name="img_url">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Ubah">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

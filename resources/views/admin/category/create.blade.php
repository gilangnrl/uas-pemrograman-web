@extends('layouts.admin.master')

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Artikel</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('store-category') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group form-inline">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Nama Kategori</label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" class="form-control input-full" name="category_name"
                                                id="inlineinput" placeholder="Laravel yang..." required>
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="inlineinput" class="col-md-3 col-form-label">Deskripsi Kategori</label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" class="form-control input-full" name="category_description"
                                                id="inlineinput" placeholder="Laravel yang..." required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" class="btn btn-primary" value="Tambah">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

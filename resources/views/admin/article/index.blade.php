@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Barang</h4>
                        <a class="btn btn-primary btn-round ml-auto" href="{{ route('create-article') }}">
                            <i class="fa fa-plus"></i>
                            Tambah Barang
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Judul Artikel</th>
                                    <th>Deskripsi</th>
                                    <th>Isi</th>
                                    {{-- <th>Author</th> --}}
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->description }}</td>
                                        <td>{{ $article->body }}</td>
                                        {{-- <td>{{ $article->users->name }}</td> --}}
                                        <td>
                                            @foreach ($article->categories as $category)
                                                {{ $category->category_name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="submit" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <form action="{{ route('destroy-article', $article->id) }}"
                                                    method="Post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-danger" data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

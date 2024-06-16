@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Article</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('articles.update', 1) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @php
                                echo($article);
                            @endphp

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $article->name) }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Sale price</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('sale_price', $article->sale_price) }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">stock</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('stock', $article->stock) }}" required autofocus>
                                </div>
                            </div>


                                <div class="form-group row">
                                    <label for="content" class="col-md-4 col-form-label text-md-right">Descripcion</label>
    
                                    <div class="col-md-6">
                                        <textarea id="content" class="form-control" name="content" required>{{ old('description', $article->description) }}</textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">Estado</label>
        
                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="title" value="{{ old('status', $article->status) }}" required autofocus>
                                        </div>
                                    </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Article
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.template')

@section('content')
    <h1 class="mb-4">Form Data Movie</h1>
    
    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="category">Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="year">Year</label>
            <input type="number" name="year" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="actors">Actors</label>
            <input type="text" name="actors" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="cover_image">Cover Image</label>
            <input type="file" name="cover_image" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

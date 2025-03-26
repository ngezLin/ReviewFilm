@extends('layouts.admin')

@section('title', 'Create Film')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Create Film</div>
                <div class="card-body">
                    <form action="{{ route('admin.films.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Film Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="director">Director</label>
                            <input type="text" name="director" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" name="genre" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="release_date">Release Date</label>
                            <input type="date" name="release_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="poster">Film Poster</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="poster" name="poster">
                                    <label class="custom-file-label" for="poster">Choose file</label>
                                </div>
                            </div>
                        </div>

                        @if(isset($film) && $film->poster)
                            <div class="mt-2">
                                <a href="{{ asset('storage/' . $film->poster) }}" target="_blank">Current Poster</a>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Save Film
                        </button>
                        <a href="{{ route('admin.films') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('title', 'Edit Film')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <!-- General Form Elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Film</h3>
            </div>
            <!-- /.card-header -->

            <!-- Form Start -->
            <form action="{{ route('films.update', $film->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Film Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $film->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" name="director" id="director" class="form-control" value="{{ $film->director }}" required>
                    </div>

                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" name="genre" id="genre" class="form-control" value="{{ $film->genre }}" required>
                    </div>

                    <div class="form-group">
                        <label for="release_date">Release Date</label>
                        <input type="date" name="release_date" id="release_date" class="form-control" value="{{ $film->release_date }}" required>
                    </div>

                    <!-- Show existing poster -->
                    <div class="form-group">
                        <label>Current Poster</label>
                        <div>
                            @if($film->poster)
                                <a href="{{ asset('storage/' . $film->poster) }}" target="_blank">View Poster</a>
                            @else
                                No Poster Available
                            @endif
                        </div>
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

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                    <a href="{{ route('admin.films') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

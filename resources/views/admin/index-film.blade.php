@extends('layouts.admin')

@section('title', 'Admin View Film')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h4>Film List</h4>
            <a href="{{ route('admin.films.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Film
            </a>
        </div>
    </div>
    <div class="card-body">
        <table id="filmTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Genre</th>
                    <th>Release Date</th>
                    <th>Poster</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                <tr>
                    <td>{{ $film->id }}</td>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->director }}</td>
                    <td>{{ $film->genre }}</td>
                    <td>{{ $film->release_date }}</td>
                    <td>
                        @if($film->poster)
                            <a href="{{ asset('storage/' . $film->poster) }}" target="_blank">View Poster</a>
                        @else
                            No Poster Available
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- DataTables Scripts -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $("#filmTable").DataTable({
            "responsive": true,
            "autoWidth": false
        });
    });
</script>
@endsection

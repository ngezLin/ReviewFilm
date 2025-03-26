@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Welcome {{ auth()->user()->name }}!</h5>
            <p>Manage films and reviews here.</p>
        </div>
    </div>
@endsection

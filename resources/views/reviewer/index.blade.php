@extends('layouts.reviewer')

@section('title', 'Reviewer Dashboard')

@section('content')
    <h5>Welcome {{ auth()->user()->name }}!</h5>
    <p>Manage your reviews here.</p>
@endsection

@extends('layout.app')
@section('content')

        <a href="{{ route('auth.logout.index') }}" type="button" class="btn btn-danger">log out</a>
        <br>

        welcome {{ getFullName() }}
    <br>
    dashboard
@endsection

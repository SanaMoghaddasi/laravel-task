@extends('layout.app')
@section('content')

        <a href="{{ route('auth.logout.index') }}" type="button" class="btn btn-danger">log out</a>
        <br>

        welcome {{auth('user')->user()->first_name . ' ' .  auth('user')->user()->last_name }}
    <br>
    dashboard
@endsection

@extends('layout.app')

@section('content')
    <form class="row g-3 needs-validation" novalidate action="{{route('auth.login.post')}}" method="post">

        @csrf

        @error('general')
            {{ $message }}
        @enderror

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input name="username" type="text" class="form-control" id="validationCustomUsername"
                       aria-describedby="inputGroupPrepend" required>
                @error('username')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">password</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input name="password" type="password" class="form-control" id="validationCustomUsername"
                       aria-describedby="inputGroupPrepend" required>
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">log in</button>
        </div>
    </form>
@endsection


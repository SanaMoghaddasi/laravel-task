@extends('layout.app')

@section('content')
    <div>
        <img width="100px" src="{{asset('assets/images/pngtree-transparent-register-now-banner-design-png-image_8971123.png')}}" alt="">

    </div>
    <form class="row g-3 needs-validation" novalidate action="{{route('auth.register.post')}}" method="post">

        @csrf

        @error('general')
        {{ $message }}
        @enderror

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input name="first_name" type="text" class="form-control" id="validationCustom01" required>
            @error('first_name')
            {{ $message }}
            @enderror
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input name="last_name" type="text" class="form-control" id="validationCustom02" required>
            @error('last_name')
            {{ $message }}
            @enderror
        </div>
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

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">password confirmation</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input name="password_confirmation" type="password" class="form-control" id="validationCustomUsername"
                       aria-describedby="inputGroupPrepend" required>
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">register</button>
        </div>
    </form>
@endsection


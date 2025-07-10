<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('user.register')}}" method="post">
    @csrf

    <div>
        <label for="username">نام کاربری</label>
        <input type="text" name="username" id="username" value="{{old('username')}}">

        @error('username')
        <br>
        <span style="color: red">
            {{ $message }}
        </span>
        @enderror


    </div>

    <div>
        <label for="password">رمز عبور</label>
        <input type="password" name="password" id="password" value="{{old('password')}}">
        </br>
        <span style="color: red">
            @error('password')
            {{ $message }}
            @enderror
        </span>

    </div>

    <div>
        <label for="first_name">نام</label>
        <input type="text" name="first_name" id="first_name" value="{{old('first_name')}}">
        </br>
        <span style="color: red">
            @error('first_name')
            {{ $message }}
            @enderror
        </span>

    </div>


    <div>
        <label for="last_name">نام خانوداگی</label>
        <input type="text" name="last_name" id="last_name" value="{{old('last_name')}}">
        <br>
        <span style="color:red">
            @error('last_name')
            {{ $message }}
            @enderror
        </span>

    </div>

    <div>
        <label for="phone">شماره</label>
        <input type="text" name="phone" id="phone" value="{{old('phone')}}">
        </br>
        <span style="color: red">
            @error('phone')
            {{ $message }}
            @enderror
        </span>

    </div>

    <div>
        <label for="email">پست الکترونیکی</label>
        <input type="text" name="email" id="email" value="{{old('email')}}">
        </br>
        <span style="color: red">
            @error('email')
            {{ $message }}
            @enderror
        </span>

    </div>

    <div>
        <label for="iban">شبا</label>
        <input type="text" name="iban" id="iban" value="{{old('iban')}}">
        </br>
        <span style="color: red">
            @error('iban')
            {{ $message }}
            @enderror
        </span>

    </div>

    <input type="submit" value="سابمیت">
</form>

</body>
</html>


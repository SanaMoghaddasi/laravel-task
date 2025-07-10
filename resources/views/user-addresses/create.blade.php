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
<form action="{{route('user-addresses.store')}}" method="post">
    @csrf

    <div>
        <label for="state">استان</label>
        <input type="text" name="state" id="state" value="{{old('state')}}">

            @error('state')
            <br>
        <span style="color: red">
            {{ $message }}
        </span>
            @enderror


    </div>

    <div>
        <label for="city">شهر</label>
        <input type="text" name="city" id="city" value="{{old('city')}}">
        </br>
        <span style="color: red">
            @error('city')
            {{ $message }}
            @enderror
        </span>

    </div>

    <div>
        <label for="street">خیابان</label>
        <input type="text" name="street" id="street" value="{{old('street')}}">
        </br>
        <span style="color: red">
            @error('street')
            {{ $message }}
            @enderror
        </span>

    </div>


    // @selected(old('city_id') == 20)



    <div>
        <label for="code">کد پستی</label>
        <input type="text" name="code" id="code" value="{{old('code')}}">
        <br>
        <span style="color:red">
            @error('code')
            {{ $message }}
            @enderror
        </span>

    </div>

    <input type="submit" value="سابمیت">
</form>

</body>
</html>


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
<div>
    @forelse($products as $product)
    @if($product['statues']=='not active')
        @continue
    @endif
        <span>
        name: {{$product['name']}}
    </span>
        <br>
        <span>
        cost: {{$product['cost']}}
    </span>
        <br>
        <span>
        created: {{$product['created']}}
    </span>
        <br>
        @isset($product['off'])
            <span>
        off: {{$product['off']}}
    </span>
        @endisset
        <br>
        @switch($product['statues'])
            @case('not active')
                <span>فعال نیست</span>
                @break
            @case('active')
                <span>فعال </span>
                @break
        @endswitch
        <br>
        @unless($loop->last)
            <br>
        @endunless
    @empty
        <span>داده موجود نمیباشد</span>
    @endforelse
    {{--    forelse  با @empty چک میکنه داده داره یا نداره--}}
    <span>
        published: {{$published_at}}
    </span>
</div>
</body>
</html>

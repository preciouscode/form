<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Products</h1> 
   {{-- <p>{{ $title }}</P> --}}
    {{-- <p>{{ $description }}</P>  --}}
        {{-- @foreach ( $data as $item )
            <p>
                {{ $item }}
            </p>
        @endforeach --}}

        {{-- <p>{{ $products }}</P> --}}

            <a href="{{ route('products') }}">products</a>
        
</body>
</html>

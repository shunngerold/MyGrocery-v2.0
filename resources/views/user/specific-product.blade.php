<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Products | MyGrocery</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    <div class="">
        <h1>{{$product->product_name}}</h1>
    </div>
</body>
</html>
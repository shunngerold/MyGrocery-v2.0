<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Products | MyGrocery</title>
</head>
<body class="bg-slate-100">
    {{-- Navigator --}}
    @include('partials._navigator')

    <div class="flex flex-wrap justify-center items-center mt-28 mb-16 gap-5 p-10">
        @unless(count($products) == 0)
            @foreach ($products as $product)
                {{-- <x-product-template :product="$product" /> --}}
                <div class="bg-white rounded-lg shadow-xl">
                    <a href="{{ route('user.spec.products', ['product' => $product->id]) }}" class="flex justify-center items-center">
                        <img class="p-5 rounded-lg h-40 w-40" src="{{ $product->product_image ? asset('storage/'.$product->product_image) : asset('images/logo-preview.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-8 w-52 h-40 grid grid-rows-4 gap-3">
                        <h5 class="text-xl font-semibold tracking-tight text-slate-900 text-ellipsis overflow-hidden">{{ $product->product_name }}</h5>
                        <div class="flex items-center mt-2 gap-1">
                            <ion-icon name="star" class="w-5 h-5 text-yellow-500"></ion-icon>
                            <ion-icon name="star" class="w-5 h-5 text-yellow-500"></ion-icon>
                            <ion-icon name="star" class="w-5 h-5 text-yellow-500"></ion-icon>
                            <ion-icon name="star-half-outline" class="w-5 h-5 text-yellow-500"></ion-icon>
                            <ion-icon name="star-outline" class="w-5 h-5 text-yellow-500"></ion-icon>
                            <span class="bg-green-200 text-lime-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3 border border-slate-400">5.0</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <h3 class="font-semibold text-stone-800 text-md">Qty:</h3>
                            <input type="number" min="1" max="100" class="w-20 h-3 shadow-sm rounded-md no-spinners py-3 border border-1 border-stone-900 font-semibold text-center text-sm" value="1">
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <span class="text-lg font-bold text-slate-900 mr-3">{{ "₱ " . $product->price }}</span>
                            <a href="{{ route('user.add.cart', ['product' => $product->id]) }}" class="text-white bg-[#239807] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center duration-500">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <x-noProducts />
        @endunless
    </div>
    <div class="m-10 px-4 text-xl">
        {{$products->links()}}
    </div>
    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
    <x-flash_message />
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Products | MyGrocery</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')
    
    <div class="grid grid-cols-3 gap-4 bg-slate-50 min-h-screen">
        <div class="flex justify-center items-center">
            <img class="h-96 w-96" src="{{ $product->product_image ? asset('storage/'.$product->product_image) : asset('images/logo-preview.png')}}" alt="product image" />
        </div>
        <div class="col-span-2 grid grid-rows-4 gap-2 py-5">
            <div class="flex items-end justify-start p-5 mt-24">
                <h1 class="md:text-5xl text-2xl font-bold text-[#239807] break-all">{{ $product->product_name }}</h1>
            </div>
            <div class="p-5 row-span-3 grid grid-cols-2 gap-2">
                <div class="">
                    <div class="flex items-center justify-start gap-3">
                        <h1 class="md:text-5xl text-2xl font-semibold text-slate-900">{{'₱ '.$product->price}}</h1>
                        <p class="md:text-2xl font-semibold text-slate-500">Per Pcs</p> 
                    </div>
                    <div class="flex items-center mt-5 mb-10 gap-3">
                        <ion-icon name="star" class="w-12 h-12 text-yellow-500"></ion-icon>
                        <ion-icon name="star" class="w-12 h-12 text-yellow-500"></ion-icon>
                        <ion-icon name="star" class="w-12 h-12 text-yellow-500"></ion-icon>
                        <ion-icon name="star-half-outline" class="w-12 h-12 text-yellow-500"></ion-icon>
                        <ion-icon name="star-outline" class="w-12 h-12 text-yellow-500"></ion-icon>
                        <span class="bg-green-200 text-lime-800 text-lg font-semibold mr-2 px-4 py-2 rounded-md ml-3 border border-2 border-slate-400">5.0</span>
                    </div>
                    <div class="flex items-center justify-start gap-3">
                        <h3 class="md:text-2xl font-semibold text-slate-900">Sold:</h3>
                        <p class="md:text-2xl font-semibold text-slate-500">110</p> 
                    </div>
                    <div class="flex items-center justify-start gap-3 mt-2">
                        <h3 class="md:text-2xl font-semibold text-slate-900">Available Stocks:</h3>
                        <p class="md:text-2xl font-semibold text-slate-500">{{ $product->stock }}</p> 
                    </div>
                    <div class="flex items-center justify-start py-5 mt-5">
                        <h3 class="break-all text-2xl font-semibold">{{ $product->description }}</h3>
                    </div>
                </div>
                <div class="flex items-start justify-center">
                    <div class="bg-lime-100 flex rounded-xl shadow-xl grid grid-rows-2 gap-4 p-8 border border-2 border-slate-400">
                        <div class="flex flex-col gap-2">
                            <h3 class="md:text-2xl font-semibold text-slate-800">Quantity</h3>
                            <input type="hidden" id="product-price" value="{{ $product->price }}">
                            <input type="number" id="input-quantity" class="shadow-md rounded-lg text-center font-semibold text-xl text-stone-800 no-spinners" value="1">
                            <span id="error-message" class="text-sm font-lead text-red-500 hidden"></span>
                            <div class="flex items-center justify-start gap-3">
                                <h3 class="md:text-2xl font-semibold text-slate-900">Price:</h3>
                                <p id="content-price" class="md:text-2xl font-semibold text-[#239807]">{{ '₱'.$product->price }}</p> 
                            </div>
                        </div>
                        <div class="flex flex-col justify-center gap-4 items-center">
                            <a href="" class="flex gap-3 justify-center items-center py-2 px-4 w-full text-slate-900 bg-yellow-500 rounded-lg border border-2 border-slate-400 shadow-xl duration-500 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                                <ion-icon name="newspaper-outline" class="w-7 h-7"></ion-icon>
                                <p class="text-lg font-semibold ">Send note to this product</p>
                            </a>
                            <a href="" class="flex gap-3 justify-center items-center py-2 px-4 w-full text-white bg-[#239807] rounded-lg border border-2 border-slate-400 shadow-xl duration-500 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                                <ion-icon name="cart" class="w-7 h-7"></ion-icon>
                                <p class="text-lg font-semibold ">Add to Cart</p>
                            </a>
                            <a href="" class="flex gap-3 justify-center items-center py-2 px-4 w-full text-white bg-[#239807] rounded-lg border border-2 border-slate-400 shadow-xl duration-500 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                                <ion-icon name="wallet-outline" class="w-7 h-7"></ion-icon>
                                <p class="text-lg font-semibold ">Buy Now</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-flash_message />
    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
</body>
</html>
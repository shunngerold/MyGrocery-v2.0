<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Products | MyGrocery</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    <div class="flex flex-wrap justify-center items-center md:mt-24 mt-40 mb-16 gap-8">
        @unless(count($products) == 0)
            @foreach ($products as $product)
                {{-- Pass the data to another file --}}
                <x-product-template :product="$product" />
            @endforeach
        @else
            <div class="grid grid-rows-4 gap-1">
                <div class="row-span-3 flex justify-center items-center">
                    <div class="">
                        <div class="w-52 h-32">
                            <img src="{{ asset('images/empty.svg') }}">
                        </div>
                    </div>
                </div>
                <div class="">
                    <h3 class="flex justify-center text-2xl font-semibold">No Products Found</h3>
                    <p class="flex justify-center">Your search did not match any products.</p>
                    <p class="flex justify-center">Please try again.</p>
                </div>
            </div>
        @endunless
    </div>

    <div class="m-10 pt-4">
        {{$products->links()}}
    </div>

    <x-footer_links />
</body>
</html>
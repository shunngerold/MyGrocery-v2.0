<x-admin-layout>
    <div class="col-span-3 m-4 select-none">
        <div class="flex justify-center items-center">
            <h3 class="text-3xl font-semibold uppercase font-mono mb-5">Product List</h3>
        </div>
        <div class="flex flex-col gap-4">
            @unless(count($products) == 0)
                @foreach ($products as $product)
                    <div class="w-full bg-lime-300 p-4 rounded-xl border border-2 border-lime-800 shadow-xl flex items-center">
                        <div class="flex justify-start">
                            <img class="w-20 h-20 rounded-lg" src="{{asset('images/logo-preview.png')}}" alt="product image" />
                        </div>
                        <div class="flex justify-center p-6 w-3/4">
                            <input type="text" name="" id="" class="text-xl font-semibold border border-none bg-transparent pointer-events-none w-full" value="{{ $product->product_name }}">
                        </div>
                        <div class="flex justify-center items-center gap-6 w-1/4">
                            <a href="" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="archive-outline" class="text-3xl font-semibold"></ion-icon>
                            </a>
                            <a href="" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="pencil-outline" class="text-3xl font-semibold"></ion-icon>
                            </a>
                            <a href="" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="trash-outline" class="text-3xl font-semibold"></ion-icon>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <x-noProducts />
            @endunless
            <div class="my-5">
                {{$products->links()}}
            </div>
        </div>
    </div>
    <div class="m-4 px-4 py-6">
        <div class="flex flex-col gap-5 justify-center items-center">
            <div class="">
                <form action="" method="GET" class="flex justify-center items-center gap-2 py-5">
                    <input type="text" name="search" placeholder="Search" class="px-2 py-2 border border-2 border-black rounded-md">
                    <button type="submit" class="px-3 py-2 bg-[#239807] text-white text-xl font-semibold rounded-lg">
                        <ion-icon name="search-sharp"></ion-icon>
                    </button>
                </form>
            </div>
            <a href="{{ route('admin.add.product') }}" class="px-5 py-3 bg-yellow-400 hover:bg-yellow-600 hover:text-white duration-500 w-full rounded-xl border border-2 border-black shadow-md">
                <p class="text-lg font-semibold flex justify-center items-center">Add products</p>
            </a>
            <a href="" class="px-5 py-3 bg-yellow-400 hover:bg-yellow-600 hover:text-white duration-500 w-full rounded-xl border border-2 border-black shadow-md">
                <p class="text-lg font-semibold flex justify-center items-center">Archived Products</p>
            </a>
        </div>
    </div>
</x-admin-layout>
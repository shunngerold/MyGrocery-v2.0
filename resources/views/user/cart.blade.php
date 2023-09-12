<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Cart | MyGrocery</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    <main class="mt-24 flex justify-center items-start py-5">
        <div class="px-4">
            <div class="p-3">
                <h1 class="font-bold text-xl flex items-center gap-2">Your Cart <span class="text-sm font-lead text-stone-400">(items: {{count($cart)}})</span></h1>
            </div>
            <div class="p-2 flex flex-col gap-3 overflow-y-auto w-[45rem] h-[45rem]">
                @unless(count($cart) == 0)
                    @foreach ($cart as $cartItems)
                        {{-- cart items --}}
                        <div class="relative border border-4 border-stone-200 p-3 rounded-lg shadow-md grid grid-cols-3 gap-2">
                            <a href="" class="absolute top-2 right-2 p-2">
                                <ion-icon name="trash-outline"></ion-icon>
                            </a>
                            <div class="flex justify-center items-center">
                                <img class="h-48 w-48" src="{{asset('images/logo-preview.png')}}" alt="product image" />
                            </div>
                            <div class="col-span-2 grid grid-rows-2 gap-2">
                                <div class="p-2 flex flex-col gap-3">
                                    <h1 class="font-semibold text-stone-700 text-3xl break-words">{{$cartItems->product_name}}</h1>
                                    <h4 class="font-semibold text-stone-400 text-md">Ref no: 9874sdfs87523</h4>
                                </div>
                                <div class="p-3 flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <h3 class="text-lime-800 font-bold text-md">Available Stock:</h3>
                                        <p class="text-slate-500 font-lead text-md">{{$cartItems->stock}}</p>
                                    </div>
                                    <div class="flex items-center">
                                        <form action="" method="post" class="flex items-center gap-2">
                                            <label for="qty" class="text-lime-800 font-bold text-md">Quantity:</label>
                                            <input type="number" class="no-spinners py-2 px-3 w-24 h-8 rounded-xl border border-2 border-slate-300 shadow-sm text-center font-semibold" value="{{$cartItems->quantity}}">
                                        </form>
                                        <div class="flex justify-between items-center w-full px-6">
                                            <h3 class="font-semibold text-xl text-slate-500">{{'₱ '.$cartItems->product_price}}</h3>
                                            <h1 class="font-semibold text-3xl text-lime-800">{{'₱ '.$cartItems->cart_price}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end of cart items --}}
                    @endforeach
                @else
                    <div class="w-full h-full flex justify-center items-start pt-10">
                        <div class="grid grid-rows-3 gap-3">
                            <div class="row-span-2 flex justify-center">
                                <img class="w-52 h-32" src="{{ asset('images/no_data.svg') }}">
                            </div>
                            <h3 class="flex justify-center text-xl font-semibold">No cart items</h3>
                        </div>
                    </div>
                @endunless
            </div>
        </div>
        <div class="">
            <div class="py-3 px-10">
                <form action="{{ route('user.checkout.form') }}" method="POST">
                    @csrf
                    <div class="h-[21.5rem] w-[30rem] border border-4 border-stone-300 shadow-md py-3 rounded-xl flex flex-col">
                        <div class="shadow-md flex flex-col gap-3">
                            <div class="flex items-center justify-between px-16">
                                <h3 class="text-stone-700 font-semibold text-xl">Subtotal:</h3>
                                <input type="hidden" name="sub" value="34">
                                <p class="text-stone-600 font-semibold text-xl">₱34</p>
                            </div>
                            <div class="flex items-center justify-between px-16">
                                <h3 class="text-stone-700 font-semibold text-xl">Delivery:</h3>
                                <input type="hidden" name="delivery" value="34">
                                <p class="text-stone-600 font-semibold text-xl">₱34</p>
                            </div>
                            <div class="flex items-center justify-between px-16 mb-5">
                                <h1 class="text-stone-700 font-semibold text-3xl">Total:</h1>
                                <input type="hidden" name="total" value="234">
                                <p class="text-stone-600 font-semibold text-3xl">₱234</p>
                            </div>  
                        </div>
                        <div class="shadow-md flex justify-center items-center py-5 px-10">
                            <button type="submit" class="bg-[#239807] w-[70%] duration-500 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 rounded-full border border-2 border-slate-400 shadow-md text-center text-lg font-semibold text-white p-2">Checkout</button>
                        </div>
                        <div class="flex items-center text-center p-5">
                            <p class="font-lead text-sm">This site is protected by <span class="font-semibold text-lime-600">PayMongo Philippines, Inc.</span> and <span class="font-semibold text-lime-600">PayMongo Payments, Inc.</span> Regulated by the Bangko Sentral ng Pilipinas. www.bsp.gov.ph</p>
                        </div>
                    </div> 
                </form>
            </div>
            <div class="px-10">
                <div class="h-[15rem] w-[30rem] border border-4 border-stone-300 shadow-md p-3 rounded-xl flex flex-col gap-3">
                    <div class="">
                        <h1 class="text-sm font-bold text-slate-900">Delivery Information.</h1>
                        <p class="font-lead text-slate-700 text-sm">Standard Delivery is <span class="font-bold text-slate-900">2-4 working days.</span></p>
                    </div>
                    <div class="flex items-center gap-2">
                        <h1 class="text-sm font-bold text-slate-900">Need it faster?</h1>
                        <p class="font-lead text-slate-700 text-sm">Message us by clicking <a href="" class="font-bold text-lime-600 hover:underline">here.</a></p>
                    </div>
                    <div class="">
                        <p class="w-full break-words font-lead text-slate-700 text-sm">Upon receipt of your order, the services will be performed to you in accordance with the terms applicable to the services that you purchased. The nature of the services you purchased and the date of your purchase may impact the timing of the performance of the services. The services will be deemed to be successfully delivered to you upon the performance of the services.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
    <x-flash_message />
</body>
</html>
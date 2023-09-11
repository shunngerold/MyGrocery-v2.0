<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Manage My Account | MyGrocery</title>
</head>
<body class="">
    {{-- Navigator --}}
    @include('partials._navigator')
    <div class="mt-28 px-16 grid grid-cols-5 gap-5">
        {{-- Side Bar --}}
        @include('partials._profile-side-nav')

        <div class="col-span-4 flex flex-col gap-4 p-3">
            <div class="">
                <div class="">
                    <h1 class="text-2xl font-bold text-lime-800">Manage My Account</h1>
                </div>
                <div class="grid grid-cols-3 gap-2 mt-5">
                    <div class="border border-4 border-slate-300 shadow-md p-3 rounded-xl flex flex-col gap-1">
                        <div class="flex justify-start items-center">
                            <h3 class="font-bold text-lg text-slate-800">Personal Profile</h3>
                        </div>
                        <div class="flex flex-col gap-1 px-3">
                            <h3 class="text-sm text-slate-800">{{ $profile->given_name . " " . $profile->family_name }}</h3>
                            <p id="Subemail" class="hidden">{{$profile->email}}</p>
                            <p id="email" class="text-slate-800"></p>
                        </div>
                        <div class="flex items-center justify-center p-3 gap-1">
                            <a href="{{ route('user.login') }}" class="bg-[#239807] w-full py-1 text-lg font-semibold text-slate-50 hover:bg-green-800 rounded-xl font-semibold shadow-md border border-2 border-stone-200 duration-500 text-center">Edit</a>
                        </div>
                    </div>
                    <div class="col-span-2 border border-4 border-slate-300 shadow-md p-3 rounded-xl flex flex-col gap-1">
                        <div class="flex justify-start items-center">
                            <h3 class="font-bold text-lg text-slate-800">Address Book</h3>
                            <div class="flex items-center justify-center px-3 gap-1">
                                <a href="{{ route('user.address.profile') }}" class="bg-[#239807] px-5 py-1 text-sm font-semibold text-slate-50 hover:bg-green-800 rounded-xl font-semibold shadow-sm border border-2 border-stone-200 duration-500 text-center">Edit</a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 px-3">
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-start items-center">
                                    <h3 class="text-md font-semibold text-slate-700">Default Shipping Address</h3>
                                </div>
                                <div class="w-full">
                                    <p class="truncate">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed modi aliquam aliquid, voluptate ipsum harum voluptates tempora esse labore obcaecati, officia beatae et. Eligendi, laboriosam. Animi dicta labore ratione amet?</p>
                                    <p class="truncate">Lorem ipsum dolor sit amet </p>
                                    <p class="truncate">Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-start items-center">
                                    <h3 class="text-md font-semibold text-slate-700">Default Billing Address</h3>
                                </div>
                                <div class="w-full break-words">
                                    <p class="truncate">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed modi aliquam aliquid, voluptate ipsum harum voluptates tempora esse labore obcaecati, officia beatae et. Eligendi, laboriosam. Animi dicta labore ratione amet?</p>
                                    <p class="truncate">Lorem ipsum dolor sit amet </p>
                                    <p class="truncate">Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-4 border-slate-300 shadow-md p-3 rounded-xl flex flex-col gap-3">
                <div class="">
                    <h3 class="font-bold text-lg text-slate-800">Recent Orders</h3>
                </div>
                <div class="flex flex-col gap-2">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-[#239807]">
                                <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg w-[20%] font-bold">Order No.</th>
                                <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg w-[20%] font-bold">Placed on</th>
                                <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg w-[20%] font-bold">Item(s)</th>
                                <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg w-[20%] font-bold">Total</th>
                                <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg w-[20%] font-bold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">#3453463453</td>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">03/22/23</td>
                                <td class="border border-2 border-slate-700 break-words p-3 h-[20%]">
                                    <div class="w-full flex justify-center">
                                        <img class="h-10 w-10" src="{{ asset('images/logo-preview.png')}}" alt="product image" />
                                    </div>
                                </td>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">₱345</td>
                                <td class="border border-2 border-slate-700 break-words h-[20%] text-center">
                                    <div class="flex items-center justify-center p-3">
                                        <a href="{{ route('user.login') }}" class="bg-yellow-500 w-full py-1 text-lg font-semibold text-slate-900 hover:text-slate-50 hover:bg-yellow-800 rounded-xl font-semibold shadow-md border border-2 border-stone-400 duration-500 text-center">Manage</a>
                                    </div> 
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">#3453463453</td>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">03/22/23</td>
                                <td class="border border-2 border-slate-700 break-words p-3 h-[20%]">
                                    <div class="w-full flex justify-center">
                                        <img class="h-10 w-10" src="{{ asset('images/logo-preview.png')}}" alt="product image" />
                                    </div>
                                </td>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">₱345</td>
                                <td class="border border-2 border-slate-700 break-words h-[20%] text-center">
                                    <div class="flex items-center justify-center p-3">
                                        <a href="{{ route('user.login') }}" class="bg-yellow-500 w-full py-1 text-lg font-semibold text-slate-900 hover:text-slate-50 hover:bg-yellow-800 rounded-xl font-semibold shadow-md border border-2 border-stone-400 duration-500 text-center">Manage</a>
                                    </div> 
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">#3453463453</td>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">03/22/23</td>
                                <td class="border border-2 border-slate-700 break-words p-3 h-[20%]">
                                    <div class="w-full flex justify-center">
                                        <img class="h-10 w-10" src="{{ asset('images/logo-preview.png')}}" alt="product image" />
                                    </div>
                                </td>
                                <td class="border border-2 border-slate-700 break-words p-3 text-lg font-semibold text-slate-700 h-[20%] text-center">₱345</td>
                                <td class="border border-2 border-slate-700 break-words h-[20%] text-center">
                                    <div class="flex items-center justify-center p-3">
                                        <a href="{{ route('user.login') }}" class="bg-yellow-500 w-full py-1 text-lg font-semibold text-slate-900 hover:text-slate-50 hover:bg-yellow-800 rounded-xl font-semibold shadow-md border border-2 border-stone-400 duration-500 text-center">Manage</a>
                                    </div> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
</body>
</html>
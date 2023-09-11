<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Address Book | MyGrocery</title>
</head>
<body class="">
    {{-- Navigator --}}
    @include('partials._navigator')
    <div class="mt-28 px-16 grid grid-cols-5 gap-5 min-h-screen">
        {{-- Side Bar --}}
        @include('partials._profile-side-nav')

        <div class="col-span-4 p-3">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-lime-800">Manage My Account</h1>
                <span class="text-2xl font-bold text-lime-800 px-2">>></span>
                <h1 class="text-2xl font-bold text-lime-800">Address Book</h1>
            </div>
            <div class="flex flex-col pt-5">
                <table class="border-collapse border border-2 border-slate-500 w-full">
                    <thead>
                        <tr class="bg-lime-600">
                            <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg font-bold">Name</th>
                            <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg font-bold">House / Office</th>
                            <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg font-bold">House No.</th>
                            <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg font-bold">Postcode</th>
                            <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg font-bold">Shipping / Billing</th>
                            <th class="border border-2 border-slate-600 p-3 text-lime-50 text-lg font-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-2 border-slate-700 break-words w-[16%] p-3 text-md font-semibold text-slate-700 text-center">Indiana</td>
                            <td class="border border-2 border-slate-700 break-words w-[16%] p-3 text-md font-semibold text-slate-700 text-center">Indianapolis</td>
                            <td class="border border-2 border-slate-700 break-words w-[16%] p-3 text-md font-semibold text-slate-700 text-center">Indianapolis</td>
                            <td class="border border-2 border-slate-700 break-words w-[16%] p-3 text-md font-semibold text-slate-700 text-center">Indianapolis</td>
                            <td class="border border-2 border-slate-700 break-words w-[16%] p-3 text-md font-semibold text-slate-700 text-center">Default Shipping and Billing Address</td>
                            <td class="border border-2 border-slate-700 break-words w-[16%] p-3 text-md font-semibold text-slate-700 text-center">Indianapolis</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-end items-center px-5 mt-5">
                    <a href="{{ route('user.login') }}" class="bg-[#239807] py-2 px-10 text-lg font-semibold text-slate-50 hover:bg-green-800 rounded-xl font-semibold shadow-md border border-2 border-stone-200 duration-500 text-center">Add Address</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
</body>
</html>
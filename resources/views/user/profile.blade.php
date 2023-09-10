<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Profile | MyGrocery</title>
</head>
<body class="bg-slate-50">
    {{-- Navigator --}}
    @include('partials._navigator')
    <div class="mt-28 px-16 grid grid-cols-4 gap-4 min-h-screen">
        <div class="p-5">
            <div class="flex items-center justify-center">
                <p class="text-lg font-semibold">Hello, {{ $profile->given_name }}</p>
            </div>
        </div>
        <div class="col-span-3">
            weq
        </div>
    </div>

    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
</body>
</html>
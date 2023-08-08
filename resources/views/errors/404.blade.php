<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>404 | MyGrocery</title>
</head>
<body>
    <div class="bg-lime-100 min-h-screen p-10 flex items-center justify-center select-none">
        <div class="">
            <div class="p-5">
                <div class="my-2">
                    <h1 class="flex justify-center text-7xl font-bold">404</h1>
                </div>
                <div class="my-2">
                    <h1 class="flex justify-center text-4xl font-bold">Page not found</h1>
                </div>
                <div class="mt-5 w-auto flex justify-center">
                    <p class="flex justify-center text-xl">Uh oh, we can't seem to find the page you're looking for. Try going back to the previous page or see our help center for more information.</p>
                </div>
                <div class="mt-20 flex justify-center items-center gap-4">
                    <a href="{{ route('index') }}" class="bg-[#239807] hover:bg-lime-600 duration-300 rounded-xl text-lg font-semibold text-white py-5 px-10 shadow-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">Back to Homepage</a>
                    <a href="" class="hover:text-lime-600 py-5 px-10 text-lg font-semibold border border-2 border-black rounded-xl duration-300 shadow-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">Help Center</a>
                </div>
            </div>
            {{-- image --}}
            <div class="flex justify-center items-center">
                <img class="w-60 h-60" src="{{ asset('/images/server-down.svg') }}">
            </div>
        </div>
    </div>
</body>
</html>
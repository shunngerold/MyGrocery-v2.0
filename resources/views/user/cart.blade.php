<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>Cart | MyGrocery</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    <main class="mt-28 min-h-screen">
        <h1>THIS IS CART PAGE</h1>
    </main>

    {{-- Footer --}}
    @include('partials._footer')
    <x-footer_links />
    <x-flash_message />
</body>
</html>
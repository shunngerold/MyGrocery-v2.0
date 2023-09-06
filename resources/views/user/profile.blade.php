<!DOCTYPE html>
<html lang="en">
<head>
    <x-header_links />
    <title>MyGrocery | Profile</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')
    
    <h1 class="mt-28">{{ $profile->given_name }}</h1>
    <x-footer_links />
</body>
</html>
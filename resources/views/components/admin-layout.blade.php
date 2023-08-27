<!DOCTYPE html>
<html lang="en">
    <head>
        <x-header_links />
        <title>MyGrocery | Admin</title>
    </head>
    <body class="bg-lime-100">
        <div class="grid grid-cols-5 gap-4">
            @include('partials._nav-admin')
            {{$slot}}
        </div>
        <x-footer_links/>
        <x-flash_message />
    </body>
</html>
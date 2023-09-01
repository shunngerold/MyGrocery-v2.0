<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

{{-- WEB ICON --}}
<link rel="shortcut icon" href="{{ asset('images/logo-preview.ico') }}" type="image/x-icon">

{{-- Tailwind-Elements CDN --}}
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<script src="//cdn.tailwindcss.com/3.3.0"></script>

{{-- Tailwind CDN --}}
<script src="//cdn.tailwindcss.com"></script>
<script src="//cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<style type="text/tailwindcss">
    @layer utilities {
        /* Remove arrow keys (spinners) from number input */
        .no-spinners::-webkit-inner-spin-button,
        .no-spinners::-webkit-outer-spin-button {
            appearance: none;
            margin: 0;
        }
        .no-spinners {
            -moz-appearance: textfield; /* Firefox */
        }
    }
</style>  

{{-- IonIcons CDN --}}
<script type="module" src="//unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="//unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

{{-- Alphine JS CDN --}}
<script src="//unpkg.com/alpinejs" defer></script>

{{-- Flowbite CDN --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
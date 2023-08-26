<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-header_links />
        <title>Welcome | MyGrocery</title>
    </head>
    <body>
        {{-- Navigator --}}
        @include('partials._navigator')

        <div>
            <section id="home">
                <div class="md:mt-0">
                    <section class="mb-16 overflow-hidden">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover xl:min-h-screen" style="background-image: url('images/bg-mygrocery.jpg'); height: 500px;">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.763);">
                                <div class="flex justify-center items-center h-full mt-10 md:mt-0">
                                    <div class="text-center text-white px-6 md:px-12">
                                        <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Welcome Customer! <br /><span>Experience the new MyGrocery</span></h1>
                                        <a href="{{ route('user.register') }}" class="inline-block px-8 py-4 mr-1.5 border-2 border-white text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">Signup Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mt-2.5 md:-mt-4 lg:-mt-6 xl:-mt-10" style="height: 50px; transform: scale(2); transform-origin: top center; color: #fff;">
                            <svg viewBox="0 0 2880 48" xmlns="//www.w3.org/2000/svg">
                            <path d="M 0 48 L 1437.5 48 L 2880 48 L 2880 0 L 2160 0 C 1453.324 60.118 726.013 4.51 720 0 L 0 0 L 0 48 Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </section>
                </div>
            </section>
            <section id="categories">
                {{-- MyCategories --}}
                <div class="container my-18 px-6 mx-auto">
                    <div class="flex justify-center pb-10">
                        <h1 class="md:text-5xl text-2xl font-bold text-[#239807]">My Categories</h1>
                    </div>
                    <section class="md:mb-28 mb-0 text-gray-800 text-center mt-5">
                        <div class="grid grid-cols-3 lg:grid-cols-4 gap-x-6 md:gap-6 gap-2 items-center md:px-16 px-0">
                            {{-- Canned Goods --}}
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=canned'}}">
                                    <img src="{{ asset('images/mycategories/canned.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Canned Goods</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=breads_and_sweets'}}">
                                    <img src="{{ asset('images/mycategories/breads.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Breads and Sweets</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=snacks'}}">
                                    <img src="{{ asset('images/mycategories/snacks.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Snacks</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=meats_and_poultry'}}">
                                    <img src="{{ asset('images/mycategories/meats.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Meats and Poultry</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=fruits_and_veggies'}}">
                                    <img src="{{ asset('images/mycategories/veggies.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Fruits and Veggies</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=instant_goods'}}">
                                    <img src="{{ asset('images/mycategories/instant.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Instant Goods</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=beverages'}}">
                                    <img src="{{ asset('images/mycategories/beverage.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Beverages</h5>
                                </a>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <a href="{{ route('user.products').'/?category=others'}}">
                                    <img src="{{ asset('images/mycategories/others.png') }}" class="md:w-36 md:h-36 square-64 mx-auto mb-1">
                                    <h5 class="md:text-2xl text-sm font-semibold text-slate-800 font-bold mb-4">Others</h5>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            {{-- About Us --}}
            <section id="aboutUs">
                <div class="container mx-auto">
                    <section class="mb-24 text-gray-800">
                        <div class="block shadow-lg bg-white">
                            <div class="flex flex-wrap items-center md:px-16">
                                <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
                                    <div class="px-10 py-12 md:px-12">
                                        <h2 class="md:text-5xl text-2xl text-[#239807] font-bold mb-6 break-words">What's new in MyGrocery?</h2>
                                        <p class="text-gray-500 text-sm md:text-lg mb-6 break-words">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime voluptas ipsam aliquam itaque cupiditate provident architecto expedita harum culpa odit, inventore rem molestias laborum repudiandae corporis pariatur quo eius iste! Quaerat, assumenda voluptates! Molestias, recusandae? Maxime fuga omnis ducimus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime voluptas ipsam aliquam itaque cupiditate provident architecto expedita harum culpa odit.
                                        </p>
                                        <div class="flex flex-wrap xl:justify-start justify-center items-center md:my-0 flex py-10">
                                            <a href="" class="bg-[#239807] font-bold text-white transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 px-6 py-3 mx-0 hover:bg-green-800 rounded-xl relative border border-stone-500 border-2">
                                                <svg xmlns="//www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle-fill absolute top-1/2 -translate-y-1/2" viewBox="0 0 16 16">
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                                <p class="ml-8 md:text-xl text-sm">Learn more About Us</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
                                    <img src="{{ asset('images/hero1.png') }}" alt="Trendy Pants and Shoes"
                                    class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            {{-- Deals --}}
            <section id="deals">
                <div class="container my-6 mx-auto">
                    <section class="mb-32 text-gray-800">
                        <div class="block shadow-lg bg-white">
                            <div class="flex flex-wrap items-center md:px-16">
                                <div class="hidden lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
                                    <img src="{{ asset('images/hero2.png') }}" alt="Trendy Pants and Shoes"
                                    class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
                                </div>
                                <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
                                    <div class="px-10 py-12 md:px-12">
                                        <h2 class="md:text-5xl text-2xl text-[#239807] font-bold mb-6">More Exciting Deals!</h2>
                                        <p class="text-gray-500 text-sm md:text-lg mb-6 break-words">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime voluptas ipsam aliquam itaque cupiditate provident architecto expedita harum culpa odit, inventore rem molestias laborum repudiandae corporis pariatur quo eius iste! Quaerat, assumenda voluptates! Molestias, recusandae? Maxime fuga omnis ducimus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum maxime voluptas ipsam aliquam itaque cupiditate provident architecto expedita harum culpa odit.
                                        </p>
                                        <div class="flex flex-wrap xl:justify-start justify-center items-center md:my-0 py-10">
                                            <a href="" class="bg-[#239807] font-bold text-white transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 px-6 py-3 md:mx-0 hover:bg-green-800 rounded-xl relative border border-stone-500 border-2">
                                                <svg xmlns="//www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-percent absolute top-1/2 -translate-y-1/2" viewBox="0 0 16 16">
                                                    <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                                </svg>
                                                <p class="ml-8 md:text-xl text-md">Go to MyDeals</p>
                                            </a>
                                            <a href="" class="bg-yellow-400 text-lime-900 font-bold transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 mx-0 md:mx-6 my-4 px-6 py-3 hover:bg-yellow-600 hover:text-white rounded-xl relative border border-stone-500 border-2">
                                                <svg xmlns="//www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tags-fill absolute top-1/2 -translate-y-1/2" viewBox="0 0 16 16">
                                                    <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                    <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                                                </svg>
                                                <p class="ml-8 md:text-xl text-sm">View MyCoupons</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            {{-- Contact Us --}}
            <div class="container my-24 mx-auto">
                <section class="mb-32 text-gray-800">
                    <div class="flex justify-center">
                        <div class="text-center lg:max-w-3xl md:max-w-xl">
                            <h2 class="text-5xl text-[#239807] font-bold mb-16">Contact us</h2>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
                            <form>
                                <div class="form-group mb-6">
                                    <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" placeholder="Name">
                                </div>
                                <div class="form-group mb-6">
                                    <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" placeholder="Email address">
                                </div>
                                <div class="form-group mb-6">
                                    <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group form-check text-center mb-6">
                                    <input type="checkbox"
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-[#239807] checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                        id="exampleCheck87" checked>
                                    <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy
                                        of this
                                        message</label>
                                </div>
                                <button type="submit" class="w-full px-6 py-2.5 bg-[#239807] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-lime-700 hover:shadow-lg focus:bg-lime-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-lime-500 active:shadow-lg transition duration-150 ease-in-out">
                                    <p>Send</p> 
                                </button>
                            </form>
                        </div>
                        <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                            <div class="flex flex-wrap">
                                <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-[#239807] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset"
                                                    class="w-5 text-white" role="img" xmlns="//www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Technical support</p>
                                            <p class="text-gray-500">support@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-[#239807] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                                                    class="w-3 text-white" role="img" xmlns="//www.w3.org/2000/svg"
                                                    viewBox="0 0 288 512">
                                                    <path fill="currentColor"
                                                        d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Sales questions</p>
                                            <p class="text-gray-500">sales@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                                    <div class="flex align-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-[#239807] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                                                    class="w-5 text-white" role="img" xmlns="//www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Press</p>
                                            <p class="text-gray-500">press@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                                    <div class="flex align-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-[#239807] rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug"
                                                    class="w-5 text-white" role="img" xmlns="//www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Bug report</p>
                                            <p class="text-gray-500">bugs@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
  
        {{-- Footer --}}
        @include('partials._footer')
    </body>
</html>
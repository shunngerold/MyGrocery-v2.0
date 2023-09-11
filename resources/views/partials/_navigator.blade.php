<nav class="fixed top-0 p-5 z-30 w-full text-white bg-lime-200 shadow-md lg:flex lg:items-center lg:justify-between">
    <div class="flex justify-between items-center">
        <span class="text-5xl ml-5 flex justify-center items-center">
            <a class="text-xl pr-2 font-semibold" href="{{ route('index') }}">
                <div class="relative justify-start">
                    <img src="{{ asset('images/logo-preview.png') }}" alt="Logo"
                        class="h-14 w-14 ml-1 absolute top-1/2 -translate-y-1/2">
                    <div class="ml-16 justify-center items-center">
                        <h2 class="text-3xl font-bold text-yellow-500"><span class="text-lime-800">My</span>Grocery</h2>
                        <p class="text-sm text-lime-900">Our service is yours!</p>
                    </div>
                </div>
            </a>
        </span>
        <div class="flex items-center">
            <span class="text-3xl cursor-pointer lg:hidden block mx-2 mx-5">
                <ion-icon class="text-lime-900" name="menu" onclick="Menu(this)"></ion-icon>
            </span>
            @auth
                {{-- Cart --}}
                <div class="relative block lg:hidden pr-6 text-lime-900">
                    <a class="nav-link hover:text-lime-800 hover:underline p-0 flex justify-center" href="{{ route('user.cart') }}">
                        <ion-icon name="cart" class="w-10 h-10"></ion-icon>
                    </a>
                    <span class="cart-count absolute bg-red-600 rounded-xl w-5 h-5 text-[12px] text-white flex items-center justify-center top-1/4 left-8 -translate-y-1/2">
                        {{-- JSON DATA HERE --}}
                    </span>
                </div>
                {{-- Profile --}}
                <div class="relative block lg:hidden select-none">
                    <a class="flex items-center" onclick="Profile(this)" name="profile" href="#" id="dropdownMenuButton2">
                        <img src="//tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full w-12 h-12"/>
                    </a>
                    <ul id="profile_popup" class="absolute hidden left-auto right-0 float-left m-0 mt-1 min-w-max list-none overflow-hidden rounded-lg border-none bg-neutral-700 text-left text-base shadow-lg transition-all ease-in duration-200">
                        <li>
                            <a class="block w-full bg-transparent py-2 px-4 text-sm font-normal text-neutral-200 font-semibold hover:bg-lime-400 hover:text-white" href="{{ route('user.manage.profile') }}">MyProfile</a>
                        </li>
                        <li>
                            <a class="block w-full bg-transparent py-2 px-4 text-sm font-normal text-neutral-200 font-semibold hover:bg-lime-400 hover:text-white" href="#">Another action</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="flex justify-start text-sm py-2 px-4 font-normal block w-full bg-transparent text-neutral-200 font-semibold hover:bg-lime-400 hover:text-white">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
    <ul id="nav" class="select-none lg:mt-0 mt-5 lg:flex lg:items-center lg:static absolute lg:bg-lime-200 bg-lime-100 text-lg text-lime-900 font-semibold w-full left-0 lg:w-auto lg:py-0 py-4 lg:pl-0 pl-7 hidden transition-all ease-in duration-200">
        <li class="nav-item pr-8 hover:text-lime-800 hover:underline flex justify-center">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item pr-8">
            <a class="flex items-center nav-link hover:text-lime-800 hover:underline p-0 flex justify-center cursor-pointer" name="products" onclick="Products(this)">
                <p>Products</p> 
                <span class="ml-2 w-2">
                    <svg xmlns="//www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                    </svg>
                </span>
            </a>
            <div class="flex justify-center">
                <ul id="products_popup" class="absolute hidden m-0 mt-2 min-w-max list-none overflow-hidden rounded-lg border-none bg-neutral-700 text-left text-base shadow-lg">
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products') }}">All Products</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=canned' }}">Canned Goods</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=breads_and_sweets' }}">Breads and Sweets</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=snacks' }}">Snacks</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=meats_and_poultry' }}">Meats and Poultry</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=fruits_and_veggies' }}">Fruits and Veggies</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=instant_goods' }}">Instant Goods</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=beverages' }}">Beverages</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-semibold text-white hover:bg-lime-400 hover:text-slate-700" href="{{ route('user.products').'/?category=others' }}">Others</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item pr-8">
            <a class="nav-link hover:text-lime-800 hover:underline p-0 flex justify-center" href="#">
                About Us
            </a>
        </li>
        <li class="nav-item pr-8">
            <a class="nav-link hover:text-lime-800 hover:underline p-0 flex justify-center" href="">
                MyDeals
            </a>
        </li>
        <li class="nav-item pr-6">
            <a class="nav-link hover:text-lime-800 hover:underline p-0 flex justify-center" href="#">
                Contact Us
            </a>
        </li>
        {{-- Cart --}}
        <li class="nav-item pr-6">
            <div class="relative lg:block hidden">
                <a class="nav-link hover:text-lime-800 hover:underline p-0 flex justify-center" href="{{ route('user.cart') }}">
                    <ion-icon name="cart" class="w-10 h-10"></ion-icon>
                </a>
                @auth
                    <span class="cart-count absolute bg-red-600 rounded-xl w-5 h-5 text-[12px] text-white flex items-center justify-center top-1/4 left-8 -translate-y-1/2">
                        {{-- JSON DATA HERE --}}
                    </span>
                @endauth
            </div>
        </li>
        @auth
            <div class="relative lg:block hidden">
                <a class="flex items-center" onclick="ProfileTwo(this)" name="profile" href="#" id="dropdownMenuButton2">
                    <img src="//tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full w-12 h-12"/>
                </a>
                <ul id="profile_popup_two" class="absolute hidden left-auto right-0 float-left m-0 mt-1 min-w-max list-none overflow-hidden rounded-lg border-none bg-neutral-700 text-left text-base shadow-lg">
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-normal text-neutral-200 font-semibold hover:bg-lime-400 hover:text-white" href="{{ route('user.manage.profile') }}">Manage Profile</a>
                    </li>
                    <li>
                        <a class="block w-full bg-transparent py-2 px-4 text-sm font-normal text-neutral-200 font-semibold hover:bg-lime-400 hover:text-white" href="#">Another action</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex justify-start text-sm py-2 px-4 font-normal block w-full bg-transparent text-neutral-200 font-semibold hover:bg-lime-400 hover:text-white">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <li class="pr-5 flex justify-center lg:mt-0 mt-5">
                <a href="{{ route('user.login') }}" class="bg-[#239807] px-11 py-2 text-lg text-white hover:bg-green-800 rounded-xl font-semibold border border-stone-400 duration-500">Login</a>
            </li>
            <li class="pr-5 flex justify-center lg:mt-0 mt-2 lg:mb-0 mb-5">
                <a href="{{ route('user.register') }}" class="bg-yellow-500 text-black px-11 py-2 text-lg hover:text-white hover:bg-yellow-800 rounded-xl font-semibold border border-stone-400 duration-500">Signup</a>
            </li>
        @endauth
    </ul>
</nav>

<script>
    function Menu(e) {
        let list = document.getElementById('nav')
        e.menu === 'close' ? 
        (    
            e.menu = "menu", 
            list.classList.add('hidden')
        ):
        (
            e.menu = "close", 
            list.classList.remove('hidden')
        )
    }

    function Profile(e) {
        let list = document.getElementById('profile_popup')
        e.profile === 'close' ? 
        (    
            e.profile = "profile", 
            list.classList.add('hidden')
        ):
        (
            e.profile = "close", 
            list.classList.remove('hidden')
        )
    }

    function ProfileTwo(e) {
        let list = document.getElementById('profile_popup_two')
        e.profile === 'close' ? 
        (    
            e.profile = "profile", 
            list.classList.add('hidden')
        ):
        (
            e.profile = "close", 
            list.classList.remove('hidden')
        )
    }

    function Products(e) {
        let list = document.getElementById('products_popup')
        e.products === 'close' ? 
        (    
            e.products = "products", 
            list.classList.add('hidden')
        ):
        (
            e.products = "close", 
            list.classList.remove('hidden')
        )
    }
    setInterval(function() {
        let list = document.getElementById('nav')
        let list2 = document.getElementById('profile_popup')
        let list3 = document.getElementById('profile_popup_two')
        let list4 = document.getElementById('products_popup')

        list.classList.add('hidden')
        list2.classList.add('hidden')
        list3.classList.add('hidden')
        list4.classList.add('hidden')
    }, 15000);

</script>
<div class="h-48 bg-lime-400 h-[700px] m-4 rounded-lg border border-lime-500 border-4 shadow-2xl p-3">
    <ul class="p-5">
        <li>
            <a href="{{ route('admin.profile') }}">
                <div class="flex justify-center items-center mb-5">
                    <img src="//tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full w-20 h-20 shadow-lg border border-2 border-lime-700"/>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="flex justify-center items-center rounded-lg shadow-md border border-1 border-lime-100 bg-lime-300 hover:shadow-lg hover:bg-yellow-600 hover:text-white h-10 mt-3 duration-500">
                    <p class="text-lg font-semibold">Dashboard</p>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.products') }}">
                <div class="flex justify-center items-center rounded-lg shadow-md border border-1 border-lime-100 bg-lime-300 hover:shadow-lg hover:bg-yellow-600 hover:text-white h-10 mt-3 duration-500">
                    <p class="text-lg font-semibold">Products</p>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.deliveries') }}">
                <div class="flex justify-center items-center rounded-lg shadow-md border border-1 border-lime-100 bg-lime-300 hover:shadow-lg hover:bg-yellow-600 hover:text-white h-10 mt-3 duration-500">
                    <p class="text-lg font-semibold">Deliveries</p>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.sales') }}">
                <div class="flex justify-center items-center rounded-lg shadow-md border border-1 border-lime-100 bg-lime-300 hover:shadow-lg hover:bg-yellow-600 hover:text-white h-10 mt-3 duration-500">
                    <p class="text-lg font-semibold">Sales</p>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.logs') }}">
                <div class="flex justify-center items-center rounded-lg shadow-md border border-1 border-lime-100 bg-lime-300 hover:shadow-lg hover:bg-yellow-600 hover:text-white h-10 mt-3 duration-500">
                    <p class="text-lg font-semibold">Logs</p>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.config') }}">
                <div class="flex justify-center items-center rounded-lg shadow-md border border-1 border-lime-100 bg-lime-300 hover:shadow-lg hover:bg-yellow-600 hover:text-white h-10 mt-3 duration-500">
                    <p class="text-lg font-semibold">Configuration</p>
                </div>
            </a>
        </li>
    </ul>
</div>
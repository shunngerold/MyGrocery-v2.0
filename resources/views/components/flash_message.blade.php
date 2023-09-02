@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="z-40 fixed top-20 right-4 rounded-lg border border-green-600 shadow-lg bg-yellow-500 text-white font-semibold px-24 py-3 transition ease-in-out delay-150 duration-500">
        <p>{{session('message')}}</p>
    </div>
@endif

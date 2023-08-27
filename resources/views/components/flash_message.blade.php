@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="z-40 fixed top-20 right-4 rounded-lg border border-green-600 shadow-lg bg-lime-400 text-green-700 font-semibold px-48 py-3 transition ease-in-out delay-150 duration-500">
        <p>{{session('message')}}</p>
    </div>
@endif

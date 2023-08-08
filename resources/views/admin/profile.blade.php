<x-admin-layout>
    <div class="col-span-3 m-4">
        Profile
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-5 py-3 border border-2 border-black text-lg font-semibold">
                Logout
            </button>
        </form>
    </div>
    <div class="m-4">
        Buttons
    </div>
</x-admin-layout>
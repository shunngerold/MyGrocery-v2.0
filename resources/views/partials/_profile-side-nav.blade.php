<div class="p-3 flex flex-col gap-3">
    <div class="flex items-center justify-start">
        <p class="text-md font-semibold">Hello, {{ $profile->given_name ? $profile->given_name : '...'}}</p>
    </div>
    <div class="grid grid-rows-2">
        <div class="flex justify-start items-center">
            <a href="{{ route('user.manage.profile') }}" class="text-xl font-bold text-lime-800">Manage My Account</a>
        </div>
        <div class="indent-8 flex flex-col gap-1">
            <a href="" class="text-md font-semibold">Personal Profile</a>
            <a href="{{ route('user.address.profile') }}" class="text-md font-semibold">Address Book</a>
        </div>
    </div>
    <div class="grid grid-rows-2">
        <div class="flex justify-start items-center">
            <a href="" class="text-xl font-bold text-lime-800">My Orders</a>
        </div>
        <div class="indent-8 flex flex-col gap-1">
            <a href="" class="text-md font-semibold">My Returns</a>
            <a href="" class="text-md font-semibold">My Cancellations</a>
        </div>
    </div>
    <div class="flex justify-start items-center">
        <a href="" class="text-xl font-bold text-lime-800">My Reviews</a>
    </div>
    <div class="flex justify-start items-center">
        <a href="" class="text-xl font-bold text-lime-800">My Wishlist</a>
    </div>
    <div class="flex justify-start items-center">
        <a href="" class="text-xl font-bold text-lime-800">Past Purchases</a>
    </div>
</div>
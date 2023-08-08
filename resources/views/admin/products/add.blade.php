<x-admin-layout>
    <div class="col-span-3 m-4 select-none">
        <div class="flex justify-center items-center">
            <h3 class="text-3xl font-semibold uppercase font-mono mb-5">Add Products</h3>
        </div>
        <div class="">
            <form action="{{ route('admin.new.product') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4" id="add_product">
                @csrf
                <div class="px-5">
                    <label for="formFile" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Image <span class="text-neutral-500 font-semibold">(jpeg, jpg, png)</span></label>
                    <input name="product_image" class="file:cursor-pointer cursor-pointer relative m-0 block w-full min-w-0 flex-auto rounded-md border border-1 border-black bg-lime-50 px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-800 file:font-semibold file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] file:bg-yellow-400 hover:file:bg-yellow-600 hover:file:text-white focus:border-black" type="file" id="formFile" />
                </div>
                <div class="px-5 grid grid-cols-2 gap-10">
                    <div class="flex flex-col gap-2">
                        <div class="">
                            <label for="product_name" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Name</label>
                            <input type="text" name="product_name" class="w-full border border-1 border-black px-3 py-[0.32rem] text-base font-normal text-neutral-700 rounded-md">
                        </div>
                        <div class="">
                            <label for="category" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Category</label>
                            <select name="category" class="w-full border border-1 border-black px-3 py-[0.32rem] text-base font-normal text-neutral-700 rounded-md">
                                <option value="" disabled class="font-semibold">Select Category</option>
                                <option value="canned">Canned Goods</option>
                                <option value="breads_and_sweets">Breads and Sweets</option>
                                <option value="snacks">Snacks</option>
                                <option value="meats_and_poultry">Meats and Poultry</option>
                                <option value="fruits_and_veggies">Fruits and Veggies</option>
                                <option value="instant_goods">Instant Goods</option>
                                <option value="beverages">Beverages</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="price" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Price <span class="text-neutral-500 font-semibold">(₱)</span></label>
                            <input type="number" name="price" class="w-full border border-1 border-black px-3 py-[0.32rem] text-base font-normal text-neutral-700 rounded-md">
                        </div>
                        <div class="">
                            <label for="stock" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Stock</label>
                            <input type="number" name="stock" class="w-full border border-1 border-black px-3 py-[0.32rem] text-base font-normal text-neutral-700 rounded-md">
                        </div>
                        <div class="">
                            <label for="description" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Description</label>
                            <textarea name="description" class="w-full border border-1 border-black px-4 py-4 text-base font-normal text-neutral-700 rounded-md"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="">
                            <label for="date_in_wh" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Arrival</label>
                            <input type="date" name="date_in_wh" class="w-full border border-1 border-black px-3 py-[0.32rem] text-base font-normal text-neutral-700 rounded-md">
                        </div>
                        <div class="">
                            <label for="date_expiry" class="mb-2 inline-block text-neutral-900"><span class="text-red-600 font-semi-bold mr-2">*</span>Product Expiration</label>
                            <input type="date" name="date_expiry" class="w-full border border-1 border-black px-3 py-[0.32rem] text-base font-normal text-neutral-700 rounded-md">
                        </div>
                        <div class="my-7">
                            <input name="active" value="1" checked class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-600 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-1 after:border-slate-700 after:bg-neutral-300 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-lime-800 checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-lime-500 checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-lime-800 checked:focus:bg-lime-800 checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s checked:hover:bg-lime-800" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                            <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="flexSwitchCheckDefault">
                                Product Status <span class="text-neutral-500 font-semibold">(Inactive / Active)</span>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="m-4 px-4 py-6">
        <div class="flex flex-col gap-5 justify-center items-center">
            <button type="submit" form="add_product" class="px-5 py-3 bg-yellow-400 hover:bg-yellow-600 hover:text-white duration-500 w-full rounded-xl border border-2 border-black shadow-md">
                <p class="text-lg font-semibold flex justify-center items-center">Add to list</p>
            </button>
            <a href="" class="px-5 py-3 bg-yellow-400 hover:bg-yellow-600 hover:text-white duration-500 w-full rounded-xl border border-2 border-black shadow-md">
                <p class="text-lg font-semibold flex justify-center items-center">Reset</p>
            </a>
        </div>
    </div>
</x-admin-layout>
<x-footer_links/>
<x-drawer>

    <div class="main-section w-full p-12 min-h-screen">
        <div class="w-full brder flex flex-col space-y-6 justify-center">

            <h1 class="text-3xl text-center font-bold tracking-wider uppercase">
                Place Order
            </h1>

            <ul class="w-full py-6 steps steps-horizontal">

                <li class="step step-secondary after:!hidden">
                    <span class="text-sm font-bold my-3">Your Order</span>
                    <div class="step-icon">
                        <i class="fas fa-shirt"></i>
                    </div>
                </li>
                <li class="step step-secondary after:!hidden">
                    <span class="text-sm font-bold my-3">Pick Up Details</span>

                    <div class="step-icon">
                        <i class="fas fa-info"></i>
                    </div>
                </li>
                <li class="step step-secondary after:!hidden">
                    <span class="text-sm font-bold my-3">Finish</span>

                    <div class="step-icon">
                        <i class="fas fa-check"></i>
                    </div>
                </li>
            </ul>

            <div
                class="my-6 py-6 pb-12 bg-lightPink rounded-sm border border-cbrown rounded-lg flex flex-col space-y-6">

                <div class="p-6 flex flex-col space-y-3">
                    <h2 class="text-xl font-bold uppercase ">
                        Branch
                    </h2>
                    <select class="select select-cbrown w-full rounded-sm">
                        <option disabled selected>Pick your location</option>
                    </select>
                </div>

                <div class="flex flex-col space-y-3">

                    {{-- Row Header --}}
                    <div class="flex justify-between items-center w-full text-center bg-secondary">
                        <span class="w-full text-lg font-bold uppercase">Services</span>
                        <span class="w-full text-lg font-bold uppercase">Qty</span>
                        <span class="w-full text-lg font-bold uppercase">Price</span>
                    </div>


                    {{-- Item component --}}
                    <div class="flex justify-between items-center w-full">
                        <div class="w-full flex justify-center items-center">
                            <div class="px-6 flex flex-col space-y-1 text-left">
                                <span class="font-bold">WASH-DRY-FOLD per Bag</span>
                                <span class="font-sm">
                                    P350
                                    <br>
                                    Up to 8kgs; max 40 -50 items; 3 - 4 days turn
                                    around
                                </span>
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="w-1/2">
                                <input type="number" class="input input-primary w-full" disabled placeholder="0">
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <span class="text-2xl font-bold">P0.00</span>
                        </div>

                    </div>
                    <div class="divider"></div>

                    {{-- Item component --}}
                    <div class="flex justify-between items-center w-full">
                        <div class="w-full flex justify-center items-center">
                            <div class="px-6 flex flex-col space-y-1 text-left">
                                <span class="font-bold">WASH-DRY-FOLD per Bag</span>
                                <span class="font-sm">
                                    P350
                                    <br>
                                    Up to 8kgs; max 40 -50 items; 3 - 4 days turn
                                    around
                                </span>
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="w-1/2">
                                <input type="number" class="input input-primary w-full" disabled placeholder="0">
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <span class="text-2xl font-bold">P0.00</span>
                        </div>

                    </div>
                    <div class="divider"></div>


                    {{-- Item component --}}
                    <div class="flex justify-between items-center w-full">
                        <div class="w-full flex justify-center items-center">
                            <div class="px-6 flex flex-col space-y-1 text-left">
                                <span class="font-bold">WASH-DRY-FOLD per Bag</span>
                                <span class="font-sm">
                                    P350
                                    <br>
                                    Up to 8kgs; max 40 -50 items; 3 - 4 days turn
                                    around
                                </span>
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="w-1/2">
                                <input type="number" class="input input-primary w-full" disabled placeholder="0">
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <span class="text-2xl font-bold">P0.00</span>
                        </div>

                    </div>
                    <div class="divider"></div>

                </div>


            </div>


        </div>
    </div>

</x-drawer>

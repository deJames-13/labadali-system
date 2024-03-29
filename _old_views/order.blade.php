<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="w-full">

    {{-- Drawer --}}
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

        {{-- Drawer Content --}}
        <div class="drawer-content flex flex-col items-center">

            {{-- Drawer Content Top --}}
            <div class="w-full p-9 bg-primary">
                <div class="container mx-auto h-full flex justify-between items-center lg:justify-end">

                    {{-- Logo --}}
                    <div class="logo flex space-x-2 items-center lg:hidden">
                        <img class="w-20 inline-block" src="img/logo-icon-transparent.png" alt="">
                        <span class="text-4xl uppercase text-secondary font-BobbyJones">labadali</span>
                    </div>


                    {{-- Nav --}}
                    <div class="nav flex space-x-6 items-center max-h-24 ">

                        <div class="text-cbrown font-medium flex space-x-3 items-center">
                            <span>Hi, <span class="text-cpink font-bold">Rizza!</span></span>
                            <div class="aspect-square border border-secondary rounded-full">
                                <img class="w-12 " src="img/rizza-icon.png" alt="rizza">
                            </div>
                        </div>
                        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                            <i class="fa-solid fa-bars"></i>
                            Menu
                        </label>
                    </div>



                </div>
            </div>

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
                                        <input type="number" class="input input-primary w-full" disabled
                                            placeholder="0">
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
                                        <input type="number" class="input input-primary w-full" disabled
                                            placeholder="0">
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
                                        <input type="number" class="input input-primary w-full" disabled
                                            placeholder="0">
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
        </div>


        {{-- Drawer Side Bar --}}
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>

            <div class="menu p-6  min-h-full bg-base-200">

                {{-- Side Bar Nav --}}
                <div class="nav flex flex-col space-y-20 items-center">
                    <div class="w-full flex flex-col space-y-3 items-center justify-start">


                        {{-- Side Bar Button --}}
                        <button onclick="window.location.href='/order'"
                            class="w-full btn btn-ghost text-primary text-xl font-bold flex justify-start items-center hover:text-cbrown">
                            <i class="fas fa-box"></i>
                            Place Order
                        </button>

                        <button
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all ">
                            <i class="fa-solid fa-compass"></i>
                            Laundry Status
                        </button>

                        <button
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all  ">
                            <i class="fas fa-clock-rotate-left"></i>
                            View History
                        </button>

                        <button
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all ">
                            <i class="fas fa-message"></i>
                            Message
                        </button>

                    </div>

                    <div class="w-full flex flex-col space-y-3 items-center">

                        <button onclick="window.location.href='/user'"
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all ">
                            <i class="fas fa-user"></i>
                            My Profile
                        </button>

                        <button
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all ">
                            <i class="fa fa-gear"></i>
                            Settings
                        </button>

                        <button class="w-full btn btn-secondary text-cbrown font-bold flex justify-start items-center">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>

                            Logout
                        </button>

                    </div>


                </div>

            </div>
        </div>


        @vite('resources/css/app.js')
</body>

</html>

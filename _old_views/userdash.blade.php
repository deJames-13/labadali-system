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

            <div class="w-full p-9 bg-primary">
                <div class="container mx-auto h-full flex justify-between items-center lg:justify-end">

                    {{-- Logo --}}
                    <div class="logo flex space-x-2 items-center lg:hidden" onclick="window.location.href='/'">
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

            {{-- Main Section --}}
            <div class="main-section w-full p-12 min-h-screen">
                <div class="w-full brder ">

                    <h1 class="text-3xl font-bold tracking-wider uppercase">
                        Profile
                    </h1>

                    <div class="my-6 py-6 p-3  bg-lightPink rounded-sm border border-cbrown rounded-lg">

                        <h2 class="text-xl font-bold uppercase mb-3">Edit Information</h2>

                        {{-- Form --}}
                        <form action="#" class="flex flex-col space-y-3">

                            {{-- First row input --}}
                            <div
                                class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">

                                {{-- Input Component --}}
                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="fname"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="fname"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">First
                                        Name:</label>
                                </div>

                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="lname"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="fname"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Last
                                        Name:</label>
                                </div>

                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="mname"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="fname"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Middle
                                        Name:</label>
                                </div>
                            </div>

                            <div class="divider"></div>

                            {{-- Second row input --}}
                            <div
                                class="w-full flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
                                <div class="w-full lg:w-2/5 relative border-b-2 focus-within:border-primary">
                                    <input type="email" name="email"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="email"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Email:</label>
                                </div>

                                <div class="w-full lg:w-1/5 relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="contact"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="contact"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Contact:</label>
                                </div>
                                <div class="w-full lg:w-2/5 flex space-x-3 items-center">
                                    <div class="w-full relative border-b-2 focus-within:border-primary">
                                        <input type="text" name="password"
                                            class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                            placeholder=" " />
                                        <label for="password"
                                            class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Password:</label>
                                    </div>

                                    <input type="button" value="Change Password" class="btn btn-bordered btn-primary">
                                </div>

                            </div>

                            <div class="divider"></div>

                            {{-- Third row input --}}
                            <div
                                class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="address"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="address"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Address:</label>
                                </div>
                            </div>

                            <div class="divider"></div>

                            {{-- Fourth row input --}}
                            <div
                                class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="country"
                                        class="input input-bordered rounded-sm block w-full max-w-1/3 appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="country"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Country:</label>
                                </div>
                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="city"
                                        class="input input-bordered rounded-sm block w-full appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="city"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">City:</label>
                                </div>
                                <div class="w-full relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="postal"
                                        class="input input-bordered rounded-sm block w-full max-w-1/3 appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="postal"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Postal:</label>
                                </div>

                            </div>

                            <div class="divider"></div>

                            {{-- Fifth row input --}}
                            <div
                                class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
                                <div class="w-1/3 relative border-b-2 focus-within:border-primary">
                                    <input type="date" name="birthday"
                                        class="input input-bordered rounded-sm block w-full max-w-1/3 appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="birthday"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-lightPink px-1">Birthday:</label>
                                </div>
                                <div class="w-1/3 relative border-b-2 focus-within:border-primary">
                                    <input type="text" name="age" disabled
                                        class="input input-bordered rounded-sm block w-full max-w-1/3 appearance-none focus:outline-none bg-transparent"
                                        placeholder=" " />
                                    <label for="age"
                                        class=" duration-300 absolute top-3 left-2 z-1 origin-4 bg-transparent font-bold px-1">Age</label>
                                </div>



                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Drawer Side --}}
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>

            <div class="menu p-6  min-h-full bg-base-200">

                {{-- Logo --}}
                <div
                    class="logo pb-3 flex space-x-2 items-center mb-10 border-b-2 border-cbrown opacity-0 lg:opacity-100">
                    <img class="w-16 inline-block" src="img/logo-icon-transparent.png" alt="">
                    <span class="text-4xl uppercase text-primary font-BobbyJones">labadali</span>
                </div>

                {{-- Nav --}}
                <div class="nav flex flex-col space-y-20 items-center">

                    <div class="w-full flex flex-col space-y-3 items-center justify-start">

                        <button onclick="window.location.href='/order'"
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:text-cbrown">
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
                            class="w-full btn btn-ghost text-primary text-xl font-bold flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all ">
                            <i class="fas fa-user"></i>
                            My Profile
                        </button>

                        <button
                            class="w-full btn btn-ghost text-cbrown font-medium flex justify-start items-center hover:font-bold hover:scale-105 transform transition-all ">
                            <i class="fa fa-gear"></i>
                            Settings
                        </button>

                        <button class="w-full btn btn-secondary text-cbrown font-bold flex justify-start items-center"
                            onclick="window.location.href='/'">

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

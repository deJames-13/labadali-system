<x-drawer :page="'profile'">


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
                    <div class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">

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
                    <div class="w-full flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
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
                    <div class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
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
                    <div class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
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
                    <div class="name flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:items-center lg:space-x-3">
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
</x-drawer>

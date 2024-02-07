{{-- Drawer --}}
<x-layout :title="'Labadali'" :noHeader="true">
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

            {{ $slot }}

        </div>

        <x-sidebar />

    </div>
</x-layout>

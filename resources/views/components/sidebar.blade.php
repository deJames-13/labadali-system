@props(['active' => false])
@php
    $activeBtn = $active ? 'text-primary text-xl font-bold hover:text-cbrown' : 'text-cbrown font-medium hover:font-bold hover:scale-105 transform transition-all';
    $btnClass = 'w-full btn btn-ghost flex justify-start items-center' . $activeBtn;
@endphp

{{-- Drawer Side Bar --}}
<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>

    <div class="menu p-6  min-h-full bg-base-200">

        <div class="py-2 border-b-2 border-cbrown mb-10">
            <x-logo />
        </div>

        {{-- Side Bar Nav --}}
        <div class="nav flex flex-col space-y-20 items-center">
            <div class="w-full flex flex-col space-y-3 items-center justify-start">


                {{-- Side Bar Button --}}
                <button onclick="window.location.href='/order'" class="{{ $btnClass }} ">
                    <i class="fas fa-box"></i>
                    Place Order
                </button>

                <button class="{{ $btnClass }}  ">
                    <i class="fa-solid fa-compass"></i>
                    Laundry Status
                </button>

                <button class="{{ $btnClass }} ">
                    <i class="fas fa-clock-rotate-left"></i>
                    View History
                </button>

                <button class="{{ $btnClass }}">
                    <i class="fas fa-message"></i>
                    Message
                </button>

            </div>

            <div class="w-full flex flex-col space-y-3 items-center">

                <button onclick="window.location.href='/user'" class="{{ $btnClass }} ">
                    <i class="fas fa-user"></i>
                    My Profile
                </button>

                <button class="{{ $btnClass }} ">
                    <i class="fa fa-gear"></i>
                    Settings
                </button>

                <button onclick="window.location.href='/'"
                    class="w-full btn btn-secondary text-cbrown font-bold flex justify-start items-center">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Logout
                </button>

            </div>


        </div>

    </div>

</div>

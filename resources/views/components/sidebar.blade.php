@props(['page' => ''])


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
                <x-side-button :link="'order'" :active="$page == 'order'">
                    <i class="fas fa-box"></i>
                    Place Order
                </x-side-button>

                <x-side-button>
                    <i class="fa-solid fa-compass"></i>
                    Laundry Status
                </x-side-button>

                <x-side-button>
                    <i class="fas fa-clock-rotate-left"></i>
                    View History
                </x-side-button>

                <x-side-button>
                    <i class="fas fa-message"></i>
                    Message
                </x-side-button>

            </div>

            <div class="w-full flex flex-col space-y-3 items-center">

                <x-side-button :link="'profile'" :active="$page == 'profile'">
                    <i class="fas fa-user"></i>
                    My Profile
                </x-side-button>

                <x-side-button>
                    <i class="fa fa-gear"></i>
                    Settings
                </x-side-button>

                <button onclick="window.location.href='/'"
                    class="w-full btn btn-secondary text-cbrown font-bold flex justify-start items-center">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Logout
                </button>

            </div>


        </div>

    </div>

</div>

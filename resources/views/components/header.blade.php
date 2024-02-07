{{-- Header --}}
<header class="w-full mb-12">
    <div class="container mx-auto p-3 h-full flex justify-between items-center border-b border-cbrown">

        {{-- Logo --}}
        <div class="logo flex space-x-2 items-center ">
            <img class="w-20 inline-block" src="img/logo-icon-transparent.png" alt="labadali-icon">
            <span class="text-4xl uppercase text-primary font-BobbyJones">
                labadali
            </span>
        </div>

        {{-- Nav --}}
        <div class="nav flex space-x-6 items-center">
            <a href="/" class="btn btn-ghost text-primary text-xl font-bold uppercase hover:text-cbrown">
                Home
            </a>

            <div
                class="btn btn-ghost text-cbrown font-medium uppercase hover:font-bold hover:scale-105 transform transition-all">
                About
            </div>

            <div
                class="btn btn-ghost text-cbrown font-medium uppercase hover:font-bold hover:scale-105 transform transition-all">
                Services
            </div>

            <a href="/signin" class="btn btn-secondary text-cbrown font-bold uppercase">
                Sign in
            </a>
        </div>



    </div>
</header>

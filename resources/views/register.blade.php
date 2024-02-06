<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body>

    <header class="w-full">
        <div class="container mx-auto p-3 h-full flex justify-between items-center border-b border-cbrown">

            {{-- Logo --}}
            <div class="logo flex space-x-2 items-center ">
                <img class="w-20 inline-block" src="{{ asset('img/logo-icon-transparent.png') }}" alt="">
                <span class="text-4xl uppercase text-primary font-BobbyJones">labadali</span>
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


    <main class="py-12 mb-[100px] w-full grid place-items-center">
        <div class="w-3/4 flex flex-col justify-center items-center space-y-3">
            <h1 class="text-4xl font-extrabold tracking-wider text-cbrown text-center uppercase">
                Create Account
            </h1>
            <span class="w-1/2 text-xl font-bold text-textSecondary text-center">
                Fill your information below or register with your social account.
            </span>

            <form action="#" class="py-3 w-full flex flex-col justify-center items-center space-y-6">

                <input name="username" id="username" type="text"
                    class="input  bg-inputBg w-full max-w-xl rounded-sm" placeholder="Name">

                <input name="email" id="email" type="email" class="input  bg-inputBg w-full max-w-xl rounded-sm"
                    placeholder="Email ">

                <input name="password" id="password" type="password"
                    class="input  bg-inputBg w-full max-w-xl rounded-sm" placeholder="Password">

                <div class="policy flex items-center space-x-3">
                    <input type="checkbox" name="policy" id="policy" class="checkbox checkbox-secondary">
                    <span class="text-cbrown font-medium">Agree with <span
                            class="text-textSecondary font-medium underline">terms and conditions</span>
                    </span>
                </div>

                <input type="submit" value="Submit"
                    class="btn btn-secondary w-full max-w-xs uppercase text-xl font-bold">

                <span class="text-textSecondary underline">Or sign up with
                </span>

                <span class="text-4xl border border-cbrown aspect-square flex items-center justify-center rounded-full">
                    <i class="fab fa-facebook"></i>
                </span>

                <span class="text-cbrown font-medium">Don't have an account? <span
                        class="text-textSecondary font-medium underline"> <a href="#">Sign up here.</a></span>
                </span>

            </form>


        </div>
    </main>









    @vite('resources/css/app.js')
</body>

</html>

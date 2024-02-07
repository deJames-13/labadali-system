<x-layout :title="'Sign-in'">
    <div class="w-3/4 flex flex-col justify-center items-center space-y-3">

        <h1 class="text-4xl font-extrabold tracking-wider text-cbrown text-center uppercase">
            SIGN IN
        </h1>

        <span class="w-1/2 text-xl font-bold text-textSecondary text-center">
            Hi! Welcome back, you’ve been missed
        </span>

        {{-- Form --}}
        <form action="/user" class="py-3 w-full flex flex-col justify-center items-center space-y-6">

            {{-- Form Input --}}
            <input name="email" id="email" type="email" class="input  bg-inputBg w-full max-w-xl rounded-sm"
                placeholder="Email ">

            <input name="password" id="password" type="password" class="input  bg-inputBg w-full max-w-xl rounded-sm"
                placeholder="Password">

            <a href="#" class="w-full max-w-xl text-right text-textSecondary font-medium underline">
                Forgot Password?
            </a>

            <input type="submit" value="Sign In" class="btn btn-secondary w-full max-w-xs uppercase text-xl font-bold">


            <span class="text-textSecondary underline">
                Or sign up with
            </span>

            <span class="text-4xl border border-cbrown aspect-square flex items-center justify-center rounded-full">
                <i class="fab fa-facebook"></i>
            </span>

            <span class="text-cbrown font-medium">
                Already have an account?
                <span class="text-textSecondary font-medium underline">
                    <a href="#">Sign in here.</a>
                </span>
            </span>

        </form>


    </div>
</x-layout>

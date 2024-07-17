<x-head>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="h-screen w-full fixed overflow-x-hidden">
        <img class="h-screen w-full z-0 object-cover top-40" src="bg-login5.jpg" alt="">
    </div>


    @if (session('failed'))
        <div class="w-full absolute top-56">
            <div class="w-fit mx-auto">
                <div id="alert-2"
                    class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-2 py-3 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-red-200 dark:hover:bg-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('failed') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <div class="absolute card shadow-cust2 p-8 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-semibold text-3xl text-center mb-4">Log In</h1>
        {{-- <form class="flex flex-col" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Log In" id="">
        </form> --}}
        <div class="login-box">
            <form action="/login" method="post">
                @csrf
                <div class="user-box mb-4">
                    <input type="text" name="username"
                        @if (isset($_COOKIE['username'])) value="{{ $_COOKIE['username'] }}" 
                        @else value="{{ old('username') }}" @endif
                        required>
                    {{-- <input type="email" name="email" value="{{ old('email') }}" required> --}}
                    <label>Username</label>
                </div>
                <div class="user-box mb-5">
                    <input type="password" name="password"
                        @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif required>
                    <label>Password</label>
                </div>
                <label class="container-check flex items-center">
                    <input type="checkbox" name="remember" @if (isset($_COOKIE['username'])) checked @endif>
                    <svg viewBox="0 0 64 64" height="1em" width="1em">
                        <path
                            d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16"
                            pathLength="575.0541381835938" class="path"></path>
                    </svg>
                    <span class="ps-2">Remember Me</span>
                </label>
                <button class="w-full button2 py-3 my-4 mt-5 font-medium" type="submit" value="Log In" name="login">
                    Log In</button>
            </form>
        </div>
    </div>
</x-head>

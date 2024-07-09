<x-head>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="h-screen w-full fixed overflow-x-hidden">
        <img class="h-screen w-full z-0 object-cover top-40" src="bg-login5.jpg" alt="">
    </div>


    @if (session('failed'))
        <div class="w-full absolute top-56">
            <div class="w-fit mx-auto">
                <div id="alert-2"
                    class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
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
                    {{-- <input type="text" name="username" value="{{ old('username') }}" required> --}}
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    <label>Username</label>
                </div>
                <div class="user-box mb-4">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <button class="w-full button2 py-3 my-4 font-medium" type="submit" value="Log In" name="login">
                    Log In</button>
            </form>
        </div>
    </div>
</x-head>

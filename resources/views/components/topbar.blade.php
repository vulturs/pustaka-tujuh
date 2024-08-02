<div class="flex w-full z-40 bg-white justify-between items-center p-4 px-3 pe-5">
    {{-- <div>
        @if (request()->is('/'))
            <h2 class="text-3xl font-semibold mx-3 pb-0">Dashboard</h2>
            {{ Breadcrumbs::render('dashboard') }}
        @elseif (request()->is('koleksi'))
            <h2 class="text-3xl font-semibold mx-3 pb-0">Koleksi</h2>
            {{ Breadcrumbs::render('koleksi') }}
        @elseif (request()->is('users'))
        {{ Breadcrumbs::render('users') }}
        @endif
    </div> --}}
    <div>
        <h2 class="text-3xl font-medium pb-1">{{ $title }}</h2>
        <x-breadcrumbs></x-breadcrumbs>
    </div>
    <div class="my-2">
        <div>
            <button type="button"
                class="flex bg-slate-200 items-center text-sm rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-14 h-14 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="user photo">
                @auth
                    <p class="px-4">{{ auth()->user()->nama }}</p>
                @endauth
            </button>
        </div>
        <div class="z-50 hidden shadow-xl my-4 text-base list-none bg-white divide-y divide-gray-100 rounded dark:bg-gray-700 dark:divide-gray-600"
            id="dropdown-user">
            <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{ auth()->user()->username }}
                </p>
                {{-- <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    neil.sims@flowbite.com
                </p> --}}
            </div>
            <ul class="py-1" role="none">
                {{-- <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Earnings</a>
                </li> --}}
                <li>
                    <a href="/logout"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</div>

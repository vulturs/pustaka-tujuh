<div class="flex w-full justify-between mb-4 mt-2">
   <div>
      <h2 class="text-3xl font-semibold mx-3 pb-0">Dashboard</h2>
      {{ Breadcrumbs::render('dashboard') }}
   </div>
   <div class="my-2">
      <div>
         <button type="button" class="flex bg-slate-200 items-center text-sm rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
            <span class="sr-only">Open user menu</span>
            <img class="w-14 h-14 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
            <p class="px-4">Nama Pengguna</p>
         </button>
      </div>
      <div class="z-50 hidden shadow-xl my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
         <div class="px-4 py-3" role="none">
            <p class="text-sm text-gray-900 dark:text-white" role="none">
               Neil Sims
            </p>
            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
               neil.sims@flowbite.com
            </p>
         </div>
         <ul class="py-1" role="none">
            <li>
               <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
            </li>
            <li>
               <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
            </li>
            <li>
               <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
            </li>
            <li>
               <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
            </li>
         </ul>
      </div>
   </div>
</div>

<div class="grid grid-cols-3 gap-5 mb-5">
   <div class="flex items-center shadow-cust p-5 rounded-2xl bg-gray-50 dark:bg-gray-800">
      <div>
         <h3 class="text-xl font-semibold mb-2">Data Anggota</h3>
         <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-1">{{ $anggota }}</h5>
         <p class="text-base font-normal text-gray-500 dark:text-gray-400">Anggota</p>
      </div>
   </div>
   <div class="flex items-center shadow-cust p-5 rounded-2xl bg-gray-50 dark:bg-gray-800">
      <div>
         <h3 class="text-xl font-semibold mb-2">Data Koleksi</h3>
         <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-1">230</h5>
         <p class="text-base font-normal text-gray-500 dark:text-gray-400">Koleksi</p>
      </div>
   </div>
   <div class="flex items-center shadow-cust p-5 rounded-2xl bg-gray-50 dark:bg-gray-800">
      <div>
         <h3 class="text-xl font-semibold mb-2">Data Pengguna</h3>
         <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-1">{{ $users }}</h5>
         <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengguna</p>
      </div>
   </div>
</div>

<div class="w-full bg-white rounded-2xl shadow-cust dark:bg-gray-800 p-4 mb-4 md:p-6">
   <div class="flex justify-between">
      <div>
         <h3 class="text-xl font-semibold mb-2">Data Kunjungan</h3>
         <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">10</h5>
         <p class="text-base font-normal text-gray-500 dark:text-gray-400">Minggu ini</p>
      </div>
      <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
         12%
         <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
         </svg>
      </div>
   </div>
   <div id="area-chart"></div>
   <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
      <div class="flex justify-between items-center pt-5">
         <!-- Button -->
         <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white" type="button">
            Last 7 days
            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
         </button>
         <!-- Dropdown menu -->
         <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
               <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
               </li>
               <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
               </li>
               <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
               </li>
               <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
               </li>
               <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
               </li>
            </ul>
         </div>
         <a href="#" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
            Report
            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
         </a>
      </div>
   </div>
</div>

<div class="grid grid-cols-2 gap-4 mb-4">
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
</div>
<div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
   <p class="text-2xl text-gray-400 dark:text-gray-500">
      <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
      </svg>
   </p>
</div>
<div class="grid grid-cols-2 gap-4">
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
   <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
         <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
         </svg>
      </p>
   </div>
</div>
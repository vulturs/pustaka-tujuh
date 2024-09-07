<x-head>
    <x-slot:title>{{ $title }}</x-slot:title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .custom-container {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .custom-form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .custom-sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .custom-container.active .custom-sign-in {
            transform: translateX(100%);
            opacity: 0;
            /* z-index: 5; */
            /* animation: custom-move 0.6s; */
            transition: all 0.6s ease-in-out;
        }

        .custom-sign-up {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .custom-container.active .custom-sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: custom-move 0.6s;
        }

        @keyframes custom-move {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .custom-toggle-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 30px 30px 30px 30px;
            z-index: 1000;
        }

        .custom-container.active .custom-toggle-container {
            transform: translateX(-100%);
            border-radius: 30px 30px 30px 30px;
        }

        .custom-toggle {
            background-color: #512da8;
            height: 100%;
            background: linear-gradient(to right, #5c6bc0, #512da8);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .custom-container.active .custom-toggle {
            transform: translateX(50%);
        }

        .custom-toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .custom-toggle-left {
            transform: translateX(-200%);
        }

        .custom-container.active .custom-toggle-left {
            transform: translateX(0);
        }

        .custom-toggle-right {
            right: 0;
            transform: translateX(0);
        }

        .custom-container.active .custom-toggle-right {
            transform: translateX(200%);
        }
    </style>
    <div class="h-screen w-full fixed overflow-x-hidden">
        <img class="h-screen w-full z-0 object-cover top-40" src="bg-login5.jpg" alt="">
    </div>

    @if (session('failed'))
        <div class="absolute z-30 top-20">
            <div class="w-fit mx-auto">
                <div id="alert-2"
                    class="flex items-center drop-shadow-lg bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-2 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-red-200 dark:hover:bg-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('failed') }}
                    </div>
                    <button type="button"
                        class="ml-auto bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
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
    <div class="body-login">

        <div class="custom-container" id="container">
            <div class="custom-form-container w-full p-14 custom-sign-up flex flex-col items-center justify-center">
                <div class="text-center mb-4">
                    <h1 class="text-2xl font-bold">LOGIN</h1>
                    {{-- <span class="text-sm">Silahkan Login untuk mengakses aplikasi</span> --}}
                </div>
                <div class="login-box w-5/6 mx-auto">
                    <form action="/login" method="post">
                        @csrf
                        <div class="user-box mb-4">
                            <input type="text" class="w-full" name="username"
                                @if (isset($_COOKIE['username'])) value="{{ $_COOKIE['username'] }}" 
                @else value="{{ old('username') }}" @endif
                                required>
                            <label>Username</label>
                        </div>
                        <div class="user-box mb-5">
                            <input type="password" class="w-full" name="password"
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
                        <button class="w-full button2 py-3 my-4 mt-6 font-medium" type="submit" value="Log In"
                            name="login">
                            Log In
                        </button>
                    </form>
                </div>
            </div>


            <div class="custom-form-container p-8 py-5 w-full custom-sign-in" id="container">
                <div class="space-y-1">
                    <div class="w-full">
                        <div class="flex justify-between items-center">
                            <button onclick="toggleDropdown()" id="dropbtn"
                                class="focus:outline-none items-center flex cursor-pointer relative top-3 bg-violet-800 rounded-b-md text-white transition duration-300 ease-in-out hover:bg-violet-700 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 rounded-full text-sm px-5 py-3">
                                Pilih Anggota
                                <span class="material-symbols-rounded">
                                    arrow_drop_down
                                </span>
                            </button>
                            <a href="{{ route('cari-katalog') }}"
                                class="focus:outline-none font-bold cursor-pointer relative top-3 bg-lime-500 rounded-b-md text-black uppercase transition duration-300 ease-in-out hover:bg-lime-500 hover:shadow-xl hover:shadow-lime-500 focus:ring-lime-300 focus:shadow-lime-400 rounded-full text-sm px-5 py-3">
                                Cari Katalog</a>
                        </div>
                    </div>

                    <div id="myDropdown"
                        class="dropdown-content hidden absolute bg-white max-h-52 drop-shadow-md overflow-y-auto dark:bg-gray-800 shadow-lg rounded-md w-60 z-10">
                        <input type="text" placeholder="Cari Nama" id="myInput" onkeyup="filterFunction()"
                            class="w-full sticky top-0 border-b-slate-500 px-4 py-2 border-b border-gray-300 dark:border-gray-700 focus:outline-none focus:border-green-500 dark:focus:border-green-500">
                        @foreach ($anggotaAll as $all)
                            <a href="#$all->id_anggota" id="cont" data-id-anggota="{{ $all->id_anggota }}"
                                data-nama-anggota="{{ $all->nama_anggota }}" data-kelas="{{ $all->kelas }}"
                                onclick="fillInputs(this);"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-green-100 dark:hover:bg-green-700 cursor-pointer">
                                {{ $all->nama_anggota }}
                            </a>
                        @endforeach
                    </div>

                </div>

                <form class="flex flex-col items-center mt-12" method="post" action="{{ route('store-kunjungan') }}">
                    @csrf
                    <div class="flex flex-wrap w-full">
                        <div class="flex-grow mb-2">
                            <span class="text-slate-500">Nama Anggota</span>
                            <input required class="font-medium p-0 border-none text-lg w-full" type="text"
                                id="nama_anggota" name="nama_anggota" disabled>
                            <hr>
                        </div>
                        <div class="flex-grow">
                            <span class="text-slate-500">Kelas</span>
                            <input required class="font-medium p-0 border-none text-lg w-full" type="text"
                                id="kelas" name="kelas" disabled>
                            <hr>
                        </div>
                    </div>

                    <label class="w-full mt-8 mb-4">
                        <textarea required name="tujuan_kunjungan" rows="2" placeholder="Tujuan Kunjungan"
                            class="p-2 border border-slate-300 rounded-md w-full">{{ old('kunjungan') }}</textarea>
                    </label>

                    <input type="hidden" id="id_anggota" name="id_anggota">

                    <div class="bottom-0 w-full mt-3">
                        <button type="submit"
                            class="fancy w-full p-3 border-2 border-lime-500 before:bg-lime-500 hover:bg-lime-500">
                            <span class="top-key"></span>
                            <span class="text text-lime-500">Simpan</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="custom-toggle-container">
                <div class="custom-toggle">
                    <div class="custom-toggle-panel custom-toggle-left">
                        <h1 class="text-2xl mb-3 font-bold">Selamat Datang Kembali!</h1>
                        <p class="text-sm font-light"><b>Login hanya untuk petugas perpustakaan!</b><br>Silahkan
                            melakukan
                            login
                            terlebih dahulu<br>untuk mengakses
                            aplikasi</p>
                        <button
                            class="bg-transparent mt-5 border border-white text-white py-2 px-6 rounded-full hover:bg-purple-800"
                            id="signIn">Isi Kunjungan</button>
                    </div>
                    <div class="custom-toggle-panel custom-toggle-right">
                        <h1 class="text-2xl font-bold">Selamat Datang di<br>Pustaka Tujuh!</h1>
                        <p class="text-sm font-light mt-3">Terima kasih sudah mengunjungi perpustakaan.<br>Silahkan isi
                            data
                            kunjungan
                            terlebih dahulu.</p>
                        <button
                            class="bg-transparent mt-5 border border-white text-white py-2 px-6 rounded-full hover:bg-purple-800"
                            id="signUp">Login Sebagai Admin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Menangani tombol Sign In dan Sign Up
        const signInButton = document.getElementById('signIn');
        const signUpButton = document.getElementById('signUp');
        const container = document.getElementById('container');

        // Menambahkan class 'active' pada container untuk transisi ke form Sign Up
        signUpButton.addEventListener('click', () => {
            container.classList.add("active");
        });

        // Menghapus class 'active' pada container untuk transisi ke form Sign In
        signInButton.addEventListener('click', () => {
            container.classList.remove("active");
        });

        // Dropdown Pilih Nama Anggota
        // Dropdown Pilih Nama Anggota
        function toggleDropdown() {
            const dropdown = document.getElementById('myDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Filter dropdown berdasarkan input
        function filterFunction() {
            var input, filter, div, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");

            for (i = 0; i < a.length; i++) {
                var txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        // Mengisi input form berdasarkan pilihan dropdown
        function fillInputs(element) {
            var idAnggota = element.getAttribute("data-id-anggota");
            var namaAnggota = element.getAttribute("data-nama-anggota");
            var kelas = element.getAttribute("data-kelas");

            document.getElementById("id_anggota").value = idAnggota;
            document.getElementById("nama_anggota").value = namaAnggota;
            document.getElementById("kelas").value = kelas;

            // Menyembunyikan dropdown setelah memilih
            document.getElementById("myDropdown").classList.add("hidden");
        }

        // Tutup dropdown jika mengklik di luar area dropdown
        window.onclick = function(event) {
            if (!event.target.matches('#dropbtn') && !event.target.matches('#myInput')) {
                const dropdowns = document.getElementsByClassName('dropdown-content');
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }

        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</x-head>

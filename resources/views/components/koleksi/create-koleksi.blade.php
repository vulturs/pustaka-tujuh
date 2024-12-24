<x-topbar :$title></x-topbar>

<div class="bg-slate-100 pt-5 p-5 rounded-2xl">
    <div class="relative mt-10 w-full flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-6 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-violet-700 bg-clip-border text-white shadow-lg shadow-violet-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Data Buku Induk
            </h3>
        </div>
        <div class="grid lg:grid-cols-2 gap-10 p-6 mb-4 px-10">
            <div class="flex flex-col gap-4">
                <form class="form" method="post" action="{{ route('store-koleksi') }}" enctype="multipart/form-data">
                    @csrf
                    <label>
                        <input required placeholder="" type="text" class="input" name="no_barcode"
                            value="{{ old('no_barcode') }}">
                        <span>No Barcode</span>
                    </label>

                    <label>
                        <input required placeholder="" type="text" class="input" name="pengarang"
                            value="{{ old('pengarang') }}">
                        <span>pengarang</span>
                    </label>

                    <label>
                        <input required placeholder="" type="text" class="input" name="judul_buku"
                            value="{{ old('judul_buku') }}">
                        <span>Judul Buku</span>
                    </label>

                    <label>
                        {{ $klasifikasi }}
                    </label>

                    <label>
                        <input required name="tahun" value="{{ old('tahun') }}" placeholder="" type="number"
                            min="1900" max="{{ date('Y') }}" class="input">
                        <span style="top:35px; font-size:.7rem;">Tahun</span>
                    </label>

                    <label>
                        <select id="bahasa" name="bahasa" value="{{ old('bahasa') }}" autocomplete="bahasa"
                            class="input" required>
                            <option value="">- Pilih Bahasa -</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Asing">Asing</option>
                        </select>
                        <span style="top: 2rem">Bahasa</span>
                    </label>

                    <label>
                        {{ $penerbit }}
                    </label>

                    <label>
                        <input required id="jumlah_total" placeholder="" type="number" class="input"
                            name="jumlah_total" value="{{ old('jumlah_total') }}">
                        <span>Jumlah</span>
                    </label>

                    <label>
                        <select id="satuan" name="satuan" value="{{ old('satuan') }}" autocomplete="satuan"
                            class="input" required>
                            <option value="">- Pilih Satuan -</option>
                            <option value="Eksemplar">Eksemplar</option>
                            <option value="Jilid">Jilid</option>
                        </select>
                        <span style="top: 2rem">Satuan</span>
                    </label>

                    <label>
                        {{ $perolehan }}
                    </label>

                    <label>
                        <input required placeholder="" type="number" class="input" name="harga"
                            value="{{ old('harga') }}">
                        <span>Harga</span>
                    </label>

                    <label>
                        <select id="tipe_harga" name="tipe_harga" value="{{ old('tipe_harga') }}"
                            autocomplete="tipe_harga" class="input" required>
                            <option value="">- Pilih satuan harga -</option>
                            <option value="Eksemplar">Eksemplar</option>
                            <option value="Jilid">Jilid</option>
                        </select>
                        <span style="top: 2rem">Harga Per/</span>
                    </label>

                    <label>
                        <input required placeholder="" type="text" class="input" name="ketersediaan"
                            value="{{ old('ketersediaan') }}">
                        <span>Ketersediaan</span>
                    </label>


                    <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                    <input type="hidden" id="stok_tersedia" name="stok_tersedia" value="{{ old('stok_tersedia') }}">



            </div>
            {{-- Cover --}}
            <div class="w-full">
                <h4 class="text-2xl font-semibold uppercase">Pilih Cover</h4>

                <div class="w-full overflow-hidden">
                    <div class="md:flex">
                        <div class="w-full mt-4">
                            <div
                                class="relative h-80 rounded-lg border-2 border-blue-500 bg-slate-100 flex justify-center items-center shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                <div class="absolute flex flex-col items-center" id="placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80"
                                        height="80" viewBox="0 0 64 64">
                                        <path fill="#bbdef9"
                                            d="M21.24,4.94H50a3,3,0,0,1,3,3v48a3,3,0,0,1-3,3H12a3,3,0,0,1-3-3V17.18a3,3,0,0,1,.88-2.12l9.24-9.24A3,3,0,0,1,21.24,4.94Z">
                                        </path>
                                        <path fill="#cce7fc"
                                            d="M10 58.15a3 3 0 0 0 2 .79H24.06L53 30V7.94a3 3 0 0 0-.29-1.26L9.85 49.54zM8.85 39.15L43.06 4.94 48.81 5.19 9 45 8.85 39.15zM8.85 33.15L37 5 40 5 8.85 36.15 8.85 33.15z">
                                        </path>
                                        <path fill="#ffefb8" d="M21 5L21 17 9 17 21 5z"></path>
                                        <path fill="#ffeb9b" d="M20 25A3 3 0 1 0 20 31A3 3 0 1 0 20 25Z"></path>
                                        <path fill="#97e0bb" d="M35.25,45,26,35.85a1.4,1.4,0,0,0-2,0L15,44.91Z"></path>
                                        <path fill="#72caaf"
                                            d="M37.46,31.59a.78.78,0,0,0-1.08,0L23,45H48.95a1,1,0,0,0,.69-1.72Z"></path>
                                        <path fill="#8d6c9f"
                                            d="M51,4H21.66a5,5,0,0,0-3.54,1.46L9.46,14.12A5,5,0,0,0,8,17.66V57a3,3,0,0,0,3,3H51a3,3,0,0,0,3-3V7A3,3,0,0,0,51,4ZM19.54,6.88A3,3,0,0,1,20,6.5V15a1,1,0,0,1-1,1H10.5a3,3,0,0,1,.38-.46ZM52,57a1,1,0,0,1-1,1H11a1,1,0,0,1-1-1V18h9a3,3,0,0,0,3-3V6H51a1,1,0,0,1,1,1Z">
                                        </path>
                                        <path fill="#8d6c9f"
                                            d="M13 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 13 52zM18 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 18 52zM23 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 23 52zM28 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 28 52zM33 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 33 52zM38 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 38 52zM43 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 43 52zM48 52a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V53A1 1 0 0 0 48 52zM49 44H25.41L37 32.41l8.29 8.29a1 1 0 0 0 1.41-1.41L38.41 31a2 2 0 0 0-2.83 0L29 37.59 26.41 35a2 2 0 0 0-2.83 0l-9 9H13a1 1 0 0 0-1 1 1 1 0 0 0 1 1H49a1 1 0 1 0 0-2zM25 36.41L27.59 39l-5 5H17.41zM20 32a4 4 0 1 0-4-4A4 4 0 0 0 20 32zm0-6.25A2.25 2.25 0 1 1 17.75 28 2.25 2.25 0 0 1 20 25.75z">
                                        </path>
                                    </svg>
                                    <span class="block mt-2 text-gray-500 font-semibold">Drag & drop your files
                                        here</span>
                                    <span class="block text-gray-400 font-normal mt-1">or click to upload</span>
                                </div>
                                <img id="preview" class="absolute h-full w-full object-contain rounded-lg hidden" />
                                <input name="cover" class="h-full w-full opacity-0 cursor-pointer" type="file"
                                    accept="image/*" id="fileInput" />

                                <div id="fileInfo"
                                    class="absolute bottom-0 bg-white left-0 p-1 rounded-bl-lg rounded-tr-lg drop-shadow-lg flex items-center space-x-2 hidden">
                                    <span id="fileName" class="text-gray-600 text-sm font-medium"></span>
                                    <button id="removeFile"
                                        class="bg-red-500 text-white p-1 rounded text-xs font-bold">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3 w-full mt-10">
                        <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                            href="{{ route('koleksi') }}">
                            <span class="top-key"></span>
                            <span class="text text-red-600">Batal</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </a>
                        <button type="submit"
                            class="fancy w-full p-3 border-2 border-lime-500 before:bg-lime-500 hover:bg-lime-500">
                            <span class="top-key"></span>
                            <span class="text text-lime-500">Simpan</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </button>

                    </div>
                </div>

            </div>
            {{-- Cover End --}}

            </form>
        </div>

    </div>
</div>
<script>
    // IIFE to handle file input preview functionality
    (function() {
        const fileInput = document.getElementById('fileInput');
        const preview = document.getElementById('preview');
        const placeholder = document.getElementById('placeholder');
        const fileInfo = document.getElementById('fileInfo');
        const fileName = document.getElementById('fileName');
        const removeFile = document.getElementById('removeFile');

        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    placeholder.classList.add('hidden');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    fileName.textContent = file.name;
                    fileInfo.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        removeFile.addEventListener('click', function() {
            fileInput.value = '';
            preview.src = '';
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');
            fileInfo.classList.add('hidden');
        });
    })();

    // IIFE to handle updating stok_tersedia when jumlah_total changes
    (function() {
        document.getElementById('jumlah_total').addEventListener('input', function() {
            // Get the value from jumlah_total input
            var jumlahTotalValue = this.value;

            // Set the value to stok_tersedia input
            document.getElementById('stok_tersedia').value = jumlahTotalValue;
        });
    })();
</script>

<div class="w-full mb-4 mt-2">
    {{-- @if (session()->hash('error')) --}}
    <h2 class="text-3xl font-semibold mx-3 pb-0">Data Kelas</h2>
    {{ Breadcrumbs::render('kelas') }}
        {{-- {{session('error') }} --}}
 </div>    
 {{-- @endif --}}
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 bg-white dark:bg-gray-900">
  <form method="post" action="{{ route('kelas.store') }}">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="nama-anggota" class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
            <div class="mt-2">
                <input type="text" name="kelas" value="{{ old('kelas') }}" id="kelas" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nama_anggota') is-invalid @enderror">
                @error('kelas')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
          </div>
          </fieldset>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{ route('kelas') }}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
</div>



{{-- @php
    $url = request()->getPathInfo();
    $items = explode('/', $url);
    unset($items[0]);
    $d = Request::segment(1);
    dd($d);
@endphp --}}

<ol class="flex items-center ms-0.5 whitespace-nowrap">
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
            href="/">
            Home
        </a>
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 capitalize hover:text-blue-600 focus:outline-none focus:text-blue-600"
            href="/">
            @if (Request::segment(1) == null)
                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
                Dashboard
            @else
                @if (null == Request::segment(2))
                    <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                @endif
                @for ($i = 1; $i < 3; $i++)
                    @if (null != Request::segment(2))
                        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    @endif
                    @if (Request::segment(1) != null)
                        {{ Request::segment($i) }}
                    @endif
                @endfor
            @endif
        </a>
    </li>
</ol>

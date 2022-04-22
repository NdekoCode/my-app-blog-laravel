@if ($list)
    <li><a href="{{ url($link) }}"
            class="{{ $classLink }} {{ request()->is('$link') ? 'text-secondary' : 'text-white' }}">{{ $title }}</a>
    </li>
@else
    <a href="{{ url($link) }}"
        class="{{ $classLink }} {{ request()->is('$link') ? 'text-secondary' : 'text-white' }}">{{ $title }}</a>
@endif

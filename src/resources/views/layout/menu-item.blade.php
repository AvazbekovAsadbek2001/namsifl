@php
    $locale = app()->getLocale();
    $title = $menu->title[$locale] ?? '';
@endphp

<li class="{{ $menu->children->count() ? 'dropdown' : '' }}">
    <a href="{{ $menu->url ?? '#' }}">
        <span>{{ $title }}</span>
        @if($menu->children->count())
            <i class="bi bi-chevron-down toggle-dropdown"></i>
        @endif
    </a>

    @if($menu->children->count())
        <ul>
            @foreach($menu->children as $child)
                @include('layout.menu-item', ['menu' => $child])
            @endforeach
        </ul>
    @endif
</li>

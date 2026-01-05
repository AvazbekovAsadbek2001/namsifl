<ol class="dd-list">
    @foreach ($menus as $menu)
        <li class="dd-item" data-id="{{ $menu->id }}">
            <div class="dd-handle">
                {{ $menu->title['uz'] ?? $menu->title['en'] ?? 'No title' }}
            </div>

            @if ($menu->children->count())
                @include('admin.menu.menu-item', [
                    'menus' => $menu->children
                ])
            @endif
        </li>
    @endforeach
</ol>
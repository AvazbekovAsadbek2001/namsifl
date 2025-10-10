<nav id="navmenu" class="navmenu">
    <ul>
        @foreach(getMenu() as $menu)
            @include('layout.menu-item', ['menu' => $menu])
        @endforeach
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

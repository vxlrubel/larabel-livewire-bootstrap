<ul class="list-unstyled d-grid sidebar-menu m-0 gap-1 p-0"
    @click="toggleSubmenu($event)">

    <li>
        <a href="{{ url('/dashboard') }}">
            <span class="icon-item">
                <i class="fa-duotone fa-solid fa-grid-2"></i>
            </span>
            Dashboard
        </a>
    </li>
    <li class="has-submenu">
        <a href="javascript:void(0);"
            class="plus">
            <span class="icon-item">
                <i class="fa-duotone fa-user"></i>
            </span>
            Movies
        </a>
        <ul class="submenu-items">
            <li><a href="javascript:void(0)">All Movies</a></li>
            <li><a href="javascript:void(0)">Add Movie</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);">
            <span class="icon-item">
                <i class="fa-duotone fa-envelope"></i>
            </span>
            Messages
        </a>
    </li>
    <li class="has-submenu">
        <a href="javascript:void(0);"
            class="plus">
            <span class="icon-item">
                <i class="fa-duotone fa-user"></i>
            </span>
            Has Submenu
        </a>
        <ul class="submenu-items">
            <li><a href="javascript:void(0)">Sub Menu item 1</a></li>
            <li><a href="javascript:void(0)">Sub Menu item 2</a></li>
            <li><a href="javascript:void(0)">Sub Menu item 3</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);">
            <span class="icon-item">
                <i class="fa-duotone fa-bell"></i>
            </span>
            Notifications
        </a>
    </li>
    <li>
        <a href="javascript:void(0);">
            <span class="icon-item">
                <i class="fa-duotone fa-arrow-right-from-bracket"></i>
            </span>
            Logout
        </a>
    </li>

</ul>

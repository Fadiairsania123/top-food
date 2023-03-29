<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboardadmin') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Data</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('resto.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Resto</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('menu.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Menu</span>
            </a>
        </li>
        
    </ul>
</nav>

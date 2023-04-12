<style>
.sidebar .nav .nav-item .nav-link i.menu-icon{
    color: white;
}
.sidebar .nav .nav-item.active > .nav-link i, .sidebar .nav .nav-item.active > .nav-link .menu-title, .sidebar .nav .nav-item.active > .nav-link .menu-arrow{
    color: #52CDFF !important;
}
</style>
<nav class="sidebar sidebar-offcanvas bg-info" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('dashboardadmin') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title ">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category text-white ">Data</li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('resto.index') }}">
                <i class="menu-icon mdi mdi-table text-white "></i>
                <span class="menu-title ">Resto</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('menu.index') }}">
                <i class="menu-icon mdi mdi-table text-white "></i>
                <span class="menu-title ">Menu</span>
            </a>
        </li>
        
    </ul>
</nav>

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
        <li class="nav-item nav-category text-white">Data</li>
        <li class="nav-item">
            <a class="nav-link  text-white " href="{{ route('pesanan.index') }}">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Pesanan</span>
            </a>
        </li>
        
    </ul>
</nav>

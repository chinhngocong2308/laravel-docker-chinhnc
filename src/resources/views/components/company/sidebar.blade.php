<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>

            <li class="{{ Request::is('company-jobs') ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-building"></i> <span>Company</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ Request::is('bootstrap-alert') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('company.create') }}">Create</a>
                    </li>
                </ul>
            </li>

        </ul>

    </aside>
</div>

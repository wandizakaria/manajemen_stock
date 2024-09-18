<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="#" href="{{ route('home.index') }}" aria-expanded="false">
                    <i class="fas fa-home menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu" id="menu">
            <li class="nav-label">Manajemen User</li>
            <li>
                <a class="#" href="{{ route('manajemen_user.index') }}" aria-expanded="false">
                    <i class="fas fa-users menu-icon"></i><span class="nav-text">Data User</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu" id="menu">
            <li class="nav-label">Inventory</li>
            <li>
                <a href="#" aria-expanded="false">
                    <i class="fas fa-box menu-icon"></i><span class="nav-text">Bahan Masuk</span>
                </a>

                <a href="{{ route('stok_bahan.index') }}" aria-expanded="false">
                    <i class="fas fa-cube menu-icon"></i><span class="nav-text">Stok Bahan</span>
                </a>

                <a href="{{ route('produksi.index') }}" aria-expanded="false">
                    <i class="fas fa-truck menu-icon"></i><span class="nav-text">Produksi</span>
                </a>
            </li>
        </ul>
    </div>
</div>

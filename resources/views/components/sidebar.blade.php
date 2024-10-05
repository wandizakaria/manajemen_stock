<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="#" href="{{ route('home.index') }}" aria-expanded="false">
                    <i class="fas fa-tachometer-alt menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu" id="menu">
            <li class="nav-label">Manajemen User</li>
            <li>
                <a class="#" href="{{ route('manajemen_user.index') }}" aria-expanded="false">
                    <i class="fas fa-users-cog menu-icon"></i><span class="nav-text">Data User</span>
                </a>
            </li>
        </ul>
        {{-- <ul class="metismenu" id="menu">
            <li class="nav-label">Supplier</li>
            <li>
                <a class="#" href="{{ route('supplier.index') }}" aria-expanded="false">
                    <i class="fas fa-truck-loading menu-icon"></i><span class="nav-text">Data Supplier</span>
                </a>
            </li>
        </ul> --}}
        <ul class="metismenu" id="menu">
            <li class="nav-label">Inventory</li>
            <li>
                <a href="{{ route('bahan_masuk.index') }}" aria-expanded="false">
                    <i class="fas fa-arrow-circle-down menu-icon"></i><span class="nav-text">Bahan Masuk</span>
                </a>
                <a href="{{ route('stok_bahan.index') }}" aria-expanded="false">
                    <i class="fas fa-box-open menu-icon"></i><span class="nav-text">Stok Bahan</span>
                </a>
                <a href="{{ route('produksi.index') }}" aria-expanded="false">
                    <i class="fas fa-truck menu-icon"></i><span class="nav-text">Unit Produksi</span>
                </a>
            </li>
        </ul>
    </div>
</div>

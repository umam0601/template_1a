<nav class="navbar navbar-expand-lg navbar-static-top" role="navigation">
    <a href="{{Route('/')}}" class="navbar-brand">Alamraya ARSOFT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-stream"></i>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav mr-auto">
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fw fa-hdd nav-icon"></i>&nbsp;&nbsp; MASTER</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href=""><i class="fas fa-fw fa-boxes nav-icon"></i>&nbsp; Master Barang</a></li>
                    <li><a href=""><i class="fas fa-fw fa-puzzle-piece nav-icon"></i>&nbsp; Master Satuan</a></li>
                    <li><a href=""><i class="fas fa-fw fa-dollar-sign nav-icon"></i>&nbsp; Master Harga</a></li>
                    <li><a href=""><i class="fas fa-fw fa-warehouse nav-icon"></i>&nbsp; Master Gudang</a></li>
                    <li><a href=""><i class="fas fa-fw fa-user-tie nav-icon"></i>&nbsp; Master Pegawai</a></li>
                    <li class="dropdown-submenu">
                        <a class="submenu">
                            Master Keuangan
                            <span class="pull-right">
                                <i class="fa fa-caret-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href=""><i class="fas fa-fw fa-money-check-alt nav-icon"></i>&nbsp; Akun Keuangan</a></li>
                            <li><a href=""><i class="fab fa-fw fa-slack nav-icon"></i>&nbsp; Akun Cashflow</a></li>
                            <li><a href=""><i class="fab fa-fw fa-cc-amazon-pay nav-icon"></i>&nbsp; Akun Pembayaran</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fw fa-cart-plus nav-icon"></i>&nbsp;&nbsp; PEMBELIAN</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fw fa-store-alt nav-icon"></i>&nbsp;&nbsp; PENJUALAN</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fw fa-warehouse nav-icon"></i>&nbsp;&nbsp; INVENTORY</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fw fa-hand-holding-usd nav-icon"></i>&nbsp;&nbsp; KEUANGAN</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fw fa-sliders-h nav-icon"></i>&nbsp;&nbsp; PENGATURAN</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                    <li><a href="">Menu item</a></li>
                </ul>
            </li>

        </ul>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img alt="image" class="rounded-circle" src="{{asset('assets/template/img/profile_small.jpg')}}" style="width: 18px; height: 18px;" />&nbsp;&nbsp; DEVELOPER
                </a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href=""><i class="fas fa-fw fa-user-alt nav-icon"></i>&nbsp;Profil</a></li>
                    <li><a href=""><i class="fas fa-fw fa-user-cog nav-icon"></i>&nbsp;Setting</a></li>
                    <li><a href=""><i class="fas fa-fw fa-sign-out-alt nav-icon"></i>&nbsp;Log Out</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="login.html">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
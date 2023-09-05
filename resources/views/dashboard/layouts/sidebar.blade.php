<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column nav-pills">
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            @can('admin')
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/mahasiswas*') ? 'active' : '' }}" href="/dashboard/mahasiswas">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Akun Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/prodis*') ? 'active' : '' }}" href="/dashboard/prodis">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Program Studi
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span data-feather="menu" class="align-text-bottom"></span>
                    Kelola SKPI
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item {{ Request::is('dashboard/news*') ? 'active' : '' }}" href="/dashboard/news">Kelola Berita</a></li>
                    <li><a class="dropdown-item {{ Request::is('dashboard/infos*') ? 'active' : '' }}" href="/dashboard/infos" aria-current="true">Kelola Info SKPI</a></li>
                    <li><a class="dropdown-item {{ Request::is('dashboard/SKPIMhs*') ? 'active' : '' }}" href="/dashboard/SKPIMhs">SKPI Mahasiswa</a></li>
                </ul>
            </li>
            @endcan
            @can('mahasiswa')
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/profils*') ? 'active' : '' }}" href="/dashboard/profils">
                    <span data-feather="user" class="align-text-bottom"></span>
                    Profil
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/prestasis*') ? 'active' : '' }}" href="/dashboard/prestasis">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Kegiatan Mahasiswa
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/sertifikats*') ? 'active' : '' }}" href="/dashboard/sertifikats">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Sertifikat Mahasiswa
                </a>
            </li> -->
            @endcan

            @can('KProdiIF')
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/pengajuans*') ? 'active' : '' }}" href="/dashboard/pengajuans">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Pengajuan SKPI
                </a>
            </li>
            @endcan
            @can('KProdiSP')
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/pengajuans*') ? 'active' : '' }}" href="/dashboard/pengajuans">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Pengajuan SKPI
                </a>
            </li>
            @endcan
            @can('KProdiIS')
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/pengajuans*') ? 'active' : '' }}" href="/dashboard/pengajuans">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Pengajuan SKPI
                </a>
            </li>
            @endcan
            @can('WDekan1')
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/persetujuans*') ? 'active' : '' }}" href="/dashboard/persetujuans">
                    <span data-feather="book-open" class="align-text-bottom"></span>
                    Pengajuan SKPI
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('dashboard/password*') ? 'active' : '' }}" href="/dashboard/password">
                    <span data-feather="key" class="align-text-bottom"></span>
                    Ubah Password
                </a>
            </li>
        </ul>
</nav>
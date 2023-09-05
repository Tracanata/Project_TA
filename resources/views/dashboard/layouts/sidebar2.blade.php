<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @can('admin')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/mahasiswas*') ? 'active' : '' }}" href="/dashboard/mahasiswas">
                <i class="bi bi-person"></i>
                <span>Data Mahasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/prodis*') ? 'active' : '' }}" href="/dashboard/prodis">
                <i class="bi bi-clipboard2"></i>
                <span>Program Studi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Kelola SKPI</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/dashboard/news">
                        <i class="bi bi-circle"></i><span>Kelola Berita</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/infos">
                        <i class="bi bi-circle"></i><span>Kelola Info SKPI</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/SKPIMhs">
                        <i class="bi bi-circle"></i><span>SKPI Mahasiswa</span>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('mahasiswa')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/profils*') ? 'active' : '' }}" href="/dashboard/profils">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/prestasis*') ? 'active' : '' }}" href="/dashboard/prestasis">
                <i class="bi bi-book"></i>
                <span>Kegiatan Mahasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/password*') ? 'active' : '' }}" href="/dashboard/password">
                <i class="bi bi-key-fill"></i>
                <span>Ubah Password</span>
            </a>
        </li>
        @endcan
        @can('KProdiIF')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/pengajuans*') ? 'active' : '' }}" href="/dashboard/pengajuans">
                <i class="bi bi-list-check"></i>
                <span>Pengajuan SKPI</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/password*') ? 'active' : '' }}" href="/dashboard/password">
                <i class="bi bi-key-fill"></i>
                <span>Ubah Password</span>
            </a>
        </li>
        @endcan
        @can('KProdiSP')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/pengajuans*') ? 'active' : '' }}" href="/dashboard/pengajuans">
                <i class="bi bi-list-check"></i>
                <span>Pengajuan SKPI</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/password*') ? 'active' : '' }}" href="/dashboard/password">
                <i class="bi bi-key-fill"></i>
                <span>Ubah Password</span>
            </a>
        </li>
        @endcan
        @can('KProdiIS')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/pengajuans*') ? 'active' : '' }}" href="/dashboard/pengajuans">
                <i class="bi bi-list-check"></i>
                <span>Pengajuan SKPI</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/password*') ? 'active' : '' }}" href="/dashboard/password">
                <i class="bi bi-key-fill"></i>
                <span>Ubah Password</span>
            </a>
        </li>
        @endcan
        @can('WDekan1')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/persetujuans*') ? 'active' : '' }}" href="/dashboard/persetujuans">
                <i class="bi bi-list-check"></i>
                <span>Pengajuan SKPI</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/password*') ? 'active' : '' }}" href="/dashboard/password">
                <i class="bi bi-key-fill"></i>
                <span>Ubah Password</span>
            </a>
        </li>
        @endcan

        @can('staff')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/staffmhs*') ? 'active' : '' }}" href="/dashboard/staffmhs">
                <i class="bi bi-person"></i>
                <span>Data Mahasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('dashboard/prodis*') ? 'active' : '' }}" href="/dashboard/prodis">
                <i class="bi bi-clipboard2"></i>
                <span>Program Studi</span>
            </a>
        </li>
        @endcan
    </ul>

</aside>
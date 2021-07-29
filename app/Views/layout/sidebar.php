<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WebSchool</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/img/profil/user-1.jpg'); ?> " class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ruqy Faishal</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('/admin'); ?>" class="nav-link <?= (url_is('admin*')) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/school'); ?>" class="nav-link
                                <?= (url_is('school*')) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Sekolah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/academic'); ?>" class="nav-link
                                <?= (url_is('academic*')) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-chalkboard"></i>
                        <p>
                            Akademik
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/curriculum'); ?>" class="nav-link
                                <?= (url_is('curriculum*')) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Kurikulum
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/student'); ?>" class="nav-link
                                <?= (url_is('student*')) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Siswa
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
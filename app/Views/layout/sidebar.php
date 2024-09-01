<aside class="main-sidebar elevation-4" style="background-color: #e9effd;">
    <div class="text-center">
        <a href="<?php echo base_url('dashboard') ?>" class="user-panel pb-3 m-3 ml-2 d-flex">
            <img src="<?php echo base_url(); ?>assets/images/logo1.png" alt="Unibike Logo" class="brand-image"
                style="opacity: .8">
            <span class="brand-text">
                <img src="<?php echo base_url(); ?>assets/images/logo2.png" alt="Unibike Logo">
            </span>
        </a>
    </div>

    <div class="sidebar">
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('dashboard') ?>" class="nav-link <?php if ($activeMenu == 'dashboard')
                           echo "active" ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                        <br>
                    </li>

                    <li class="nav-header">Manajemen Pengguna</li>

                <?php if (in_groups('superAdmin')): ?>
                    <li class="nav-item <?php if (in_array($activeMenu, ['List Admin', 'Tambah Admin']))
                        echo "menu-open" ?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Admin
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('admin') ?>" class="nav-link <?php if ($activeMenu == 'List Admin')
                                           echo "active" ?>">
                                        <i class="far fa-circle nav-icon" style="opacity: 0;" style="opacity: 0;"></i>
                                        <p>List Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('admin/create') ?>" class="nav-link <?php if ($activeMenu == 'Tambah Admin')
                                           echo "active" ?>">
                                        <i class="far fa-circle nav-icon" style="opacity: 0;" style="opacity: 0;"></i>
                                        <p>Tambah Admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a href="<?php echo base_url('user') ?>" class="nav-link <?php if ($activeMenu == 'List Peminjam')
                           echo "active" ?>">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                List Peminjam
                            </p>
                        </a>
                    </li>


                    <br>

                    <li class="nav-header">Manajemen Sepeda Listrik</li>
                    <li class="nav-item <?php if (in_array($activeMenu, ['List Sepeda', 'Tambah Sepeda']))
                           echo "menu-open" ?>">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bicycle"></i>
                            <p>
                                Sepeda Listrik
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('bikes') ?>" class="nav-link <?php if ($activeMenu == 'List Sepeda')
                                       echo "active" ?>">
                                    <i class="far fa-circle nav-icon" style="opacity: 0;" style="opacity: 0;"></i>
                                    <p>List Sepeda</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('bike/create') ?>" class="nav-link <?php if ($activeMenu == 'Tambah Sepeda')
                                      echo "active" ?>">
                                    <i class="far fa-circle nav-icon" style="opacity: 0;" style="opacity: 0;"></i>
                                    <p>Tambah Sepeda</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo base_url('shelters') ?>" class="nav-link <?php if ($activeMenu == 'List Shelter')
                               echo "active" ?>">
                            <i class="nav-icon fas fa-map-marker-alt"></i>
                            <p>
                                List Shelter
                            </p>
                        </a>
                    </li>
                    <br>

                    <li class="nav-header">Manajemen Data</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('rents') ?>" class="nav-link <?php if ($activeMenu == 'List Data Peminjaman')
                               echo "active" ?>">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                List Data Peminjaman
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo base_url('feedback') ?>" class="nav-link <?php if ($activeMenu == 'List Feedback')
                               echo "active" ?>">
                            <i class="nav-icon fas fa-comment-dots"></i>
                            <p>
                                List Feedback
                            </p>
                        </a>
                    </li>
                    <br>

                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
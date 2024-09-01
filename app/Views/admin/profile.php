<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img src="data:image/jpeg;base64,<?= base64_encode(user()->user_image) ?>"
                                class="img-circle" width="100px" alt="User Image">
                        </div>
                        <h3 class="profile-username text-center"><?= user()->fullname; ?></h3>
                        <div class="text-center">
                            <?php if (in_groups('superAdmin')) {
                                echo '<p class="badge badge-dark text-center">Super Admin</p>';
                            } elseif (in_groups('admin')) {
                                echo '<p class="badge badge-info text-center">Admin Unibike</p>';
                            } ?>
                        </div>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Nama Lengkap</b> <span class="float-right"><?= user()->fullname; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Username</b> <span class="float-right"><?= user()->username; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Nomor Telepon</b> <span class="float-right"><?= user()->telp_adm; ?></span>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <span class="float-right"><?= user()->email; ?></span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="<?php echo base_url('profile/profileedit/' . user()->id); ?>"
                                class="btn btn-primary">
                                <b>Edit Profil</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
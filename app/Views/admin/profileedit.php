<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('profile') ?>">Profil Admin</a></li>
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

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="fullname">Nama Lengkap</label>
                                <input type="text"
                                    class="form-control <?php if (isset($_POST['submit']) && session('errors.fullname')): ?>is-invalid<?php endif ?>"
                                    id="fullname" name="fullname" value="<?= user()->fullname; ?>">
                                <?php if (isset($_POST['submit']) && session('errors.fullname')): ?>
                                    <div class="invalid-feedback"><?= session('errors.fullname') ?></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text"
                                    class="form-control <?php if (isset($_POST['submit']) && session('errors.username') && (empty(user()->username) || session('errors.username') != '')): ?>is-invalid<?php endif ?>"
                                    id="username" name="username" value="<?= user()->username; ?>">
                                <?php if (isset($_POST['submit']) && session('errors.username') && (empty(user()->username) || session('errors.username') != '')): ?>
                                    <div class="invalid-feedback"><?= session('errors.username') ?></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="telp_adm">Nomor Telepon</label>
                                <input type="text"
                                    class="form-control <?php if (isset($_POST['submit']) && session('errors.telp_adm')): ?>is-invalid<?php endif ?>"
                                    id="telp_adm" name="telp_adm" value="<?= user()->telp_adm; ?>">
                                <?php if (isset($_POST['submit']) && session('errors.telp_adm')): ?>
                                    <div class="invalid-feedback"><?= session('errors.telp_adm') ?></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email"
                                    class="form-control <?php if (isset($_POST['submit']) && session('errors.email') && (empty(user()->email) || session('errors.email') != '')): ?>is-invalid<?php endif ?>"
                                    id="email" name="email" value="<?= user()->email; ?>">
                                <?php if (isset($_POST['submit']) && session('errors.email') && (empty(user()->email) || session('errors.email') != '')): ?>
                                    <div class="invalid-feedback"><?= session('errors.email') ?></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="text"
                                    class="form-control <?php if (isset($_POST['submit']) && session('errors.password') && (empty(user()->password) || session('errors.password') != '')): ?>is-invalid<?php endif ?>"
                                    id="password" name="password"
                                    placeholder="masukkan password baru jika ingin mengganti password">
                                <?php if (isset($_POST['submit']) && session('errors.password')): ?>
                                    <div class="text-danger"><?= session('errors.password') ?></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="profile_pic">Profile Picture</label>
                                <small class="text-muted">(upload gambar jika ingin mengganti foto profil)</small>
                                <br>
                                <input type="file" id="user_image" name="user_image">
                                <?php if (isset($_POST['submit']) && session('errors.user_image')): ?>
                                    <div class="text-danger"><?= session('errors.user_image') ?></div>
                                <?php endif ?>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">Update Profil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</section>
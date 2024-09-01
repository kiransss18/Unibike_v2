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

<div class="container">
    <div class="row" style="justify-content:center; ">
        <div class="m-5 col-sm-5 offset-sm-3">
            <div class="card">
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <div class="m-2">

                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>


                            <div class="form-group">
                                <label for="fullname">Nama</label>
                                <input type="text"
                                    class="form-control <?php if (session('errors.fullname')): ?>is-invalid<?php endif ?>"
                                    name="fullname" placeholder="Masukkan nama lengkap" value="<?= old('fullname') ?>">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email"
                                    class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="Masukkan email"
                                    value="<?= old('email') ?>">
                            </div>

                            <div class="form-group">
                                <label for="password"><?= lang('Auth.password') ?></label>
                                <input type="text" name="password"
                                    class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                                    placeholder="Masukkan password" autocomplete="off">
                            </div>

                            <div class="text-center">
                                <br>

                                <button type="submit" class="btn btn1">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
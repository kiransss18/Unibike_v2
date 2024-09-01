<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-5 offset-sm-3">

            <div class="card">
                <div class="mx-4 mt-5">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/logo.png" width="50%" alt="unibike logo">
                    </div>
                    <div class="text-center">
                        <h3 class="text-bold">Reset Password</h3>
                    </div>

                    <div class="card-body">

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= url_to('reset-password') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="token"><?= lang('Auth.token') ?></label>
                                <input type="text"
                                    class="form-control <?php if (session('errors.token')): ?>is-invalid<?php endif ?>"
                                    name="token" placeholder="Masukkan token yang diterima via email"
                                    value="<?= old('token', $token ?? '') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.token') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email"><?= lang('Auth.email') ?></label>
                                <input type="email"
                                    class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>"
                                    value="<?= old('email') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input type="password"
                                    class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                                    name="password">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pass_confirm">Ulangi Password Baru</label>
                                <input type="password"
                                    class="form-control <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                                    name="pass_confirm">
                                <div class="invalid-feedback">
                                    <?= session('errors.pass_confirm') ?>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn1">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
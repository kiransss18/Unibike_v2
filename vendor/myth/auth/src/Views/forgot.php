<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-5 offset-sm-3">

            <div class="card">
                <div class="mx-4 mt-5">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/logo.png" width="70%" alt="unibike logo">
                    </div>

                    <div class="card-body">
                        <div class="m-3">
                            <div class="justify-content-center">
                                <div class="text-center">
                                    <h2 class="text-bold">Lupa Password</h2>
                                    <p>Masukkan email untuk mendapatkan instruksi reset password</p>
                                    <br>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>
                                <form action="<?= url_to('forgot') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email"
                                            class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?>"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="Masukkan Email Akun Terkait">
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn1">Kirim Instruksi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
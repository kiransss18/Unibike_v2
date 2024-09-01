<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="row">
		<div class="col-sm-5 offset-sm-3">

			<div class="card">

				<div class="card-body">
					<div class="m-3">
						<div class="d-flex justify-content-center">
							<img src="assets/images/logo.png" width="80%" alt="unibike logo">
						</div>
					</div>
					<div style="height: 15px;"></div>
					<div class="text-center">
						<?= view('Myth\Auth\Views\_message_block') ?>
					</div>
					<div class="mx-5 mt-3">
						<form action="<?= url_to('login') ?>" method="post">
							<?= csrf_field() ?>

							<?php if ($config->validFields === ['email']): ?>
								<div class="form-group">
									<label for="login"><?= lang('Auth.email') ?></label>
									<input type="email"
										class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif ?>"
										name="login" placeholder="<?= lang('Auth.email') ?>">
									<div class="invalid-feedback">
										<?= session('errors.login') ?>
									</div>
								</div>
							<?php else: ?>
								<div class="form-group">
									<label for="login">Email atau Username</label>
									<input type="text"
										class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif ?>"
										name="login" placeholder="Masukkan Email atau Username">
									<div class="invalid-feedback">
										<?= session('errors.login') ?>
									</div>
								</div>
							<?php endif; ?>

							<div class="form-group">
								<label for="password"><?= lang('Auth.password') ?></label>
								<input type="password" name="password"
									class="form-control  <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
									placeholder="Masukkan Password">
								<div class="invalid-feedback">
									<?= session('errors.password') ?>
								</div>
							</div>

							<?php if ($config->allowRemembering): ?>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')): ?> checked <?php endif ?>>
										<?= lang('Auth.rememberMe') ?>
									</label>
								</div>
							<?php endif; ?>
							<div class="text-center">
								<br>
								<button type="submit" class="btn btn1">Masuk</button>
							</div>
						</form>
					</div>

					<div class="text-center">
						<?php if ($config->activeResetter): ?>
							<p><a href="<?= url_to('forgot') ?>">Lupa Password?</a></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
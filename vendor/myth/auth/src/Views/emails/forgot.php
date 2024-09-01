<p>Halo!</p>

<p>Kami mengirim email sebagai tanggapan atas permintaan untuk mengatur ulang kata sandi pada <a
                href="<?= site_url() ?>">Unibike Admin</p>

<p>Untuk mengatur ulang kata sandi, silahkan klik link dibawah ini </p>

<br>

<p>Token: <?= $hash ?></p>

<p>Link Reset Password <a href="<?= url_to('reset-password') . '?token=' . $hash ?>">Klik disini</a>.</p>

<br>
<br>
<i class="text-muted">Jika anda tidak merasa melakukan permintaan atur ulang kata sandi, silahkan abaikan email ini</i>
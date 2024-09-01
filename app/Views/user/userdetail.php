<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('user') ?>">List Peminjam</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">

                        <div class="text-center">
                            <h2>Detail Peminjam</h2>
                            <hr>
                            <img class="profile-user-img img-fluid img-circle"
                                src="data:image/jpeg;base64,<?= base64_encode($user['students_img']) ?>"
                                alt="Foto Peminjam" width="100px">
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-2"></div>

                            <div class="col-md-8">
                                <div class="data-container">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <p class="rounded border p-2">
                                            <?= $user['nama'] ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>NPM</label>
                                        <p class="rounded border p-2">
                                            <?= $user['npm'] ?>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <p class="rounded border p-2">
                                                    <?= $user['email'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. Telepon</label>
                                                <p class="rounded border p-2">
                                                    <?= $user['telp_mhs'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <p class="rounded border p-2">
                                            <?= $user['alamat'] ?>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Angkatan</label>
                                                <p class="rounded border p-2">
                                                    <?= $user['angkatan'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jurusan</label>
                                                <p class="rounded border p-2">
                                                    <?= $user['jurusan'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Fakultas</label>
                                        <p class="rounded border p-2">
                                            <?= $user['fakultas'] ?>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    Jumlah Peminjaman
                                                    <a href="#" data-toggle="modal" data-target="#rentLogModal">(lihat
                                                        log)</a>
                                                </label>
                                                <p class="rounded border p-2">
                                                    <?= $user['rents_users'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total Waktu Peminjaman</label>
                                                <p class="rounded border p-2">
                                                    <?= $user['total_rent_time'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal dialog for rent log -->
                                    <div class="modal fade" id="rentLogModal" tabindex="-1" role="dialog"
                                        aria-labelledby="rentLogModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="rentLogModalLabel">Log Peminjaman</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table id="dataFeedback" class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr class="text-center">
                                                                <th class="align-middle">
                                                                    Id Peminjaman
                                                                </th>
                                                                <th class="align-middle">
                                                                    Id Sepeda
                                                                </th>
                                                                <th class="align-middle">
                                                                    Total Waktu Peminjaman
                                                                </th>
                                                                <th class="align-middle">
                                                                    Total Jarak Peminjaman
                                                                </th>
                                                                <th class="align-middle">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <?php if (empty($Logs)): ?>
                                                            <tr>
                                                                <td colspan="5" class="text-center align-middle">
                                                                    <a class="text-muted">Belum ada data peminjaman</a>
                                                                </td>
                                                            </tr>
                                                        <?php else: ?>
                                                            <?php foreach ($Logs as $Log) { ?>
                                                                <tr>
                                                                    <td class="text-center align-middle">
                                                                        <?= $Log['id_rents'] ?>
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        <?= $Log['id_bikes'] ?>
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        <?= $Log['waktu_kembali'] !== null ? $Log['total_time'] : '<span class="text-muted">Sedang meminjam sepeda</span>' ?>
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        <?= $Log['waktu_kembali'] !== null ? $Log['total_jarak'] : '<span class="text-muted">' . $Log['total_jarak'] . '</span>' ?>
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        <a href="<?= site_url('rent/rentdetail/' . $Log['id_rents']) ?>"
                                                                            class="btn btn-sm btn-primary">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        <?php endif; ?>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
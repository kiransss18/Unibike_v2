<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('rents') ?>">List Data Peminjaman</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md p-2">
                            <h3 class="text-primary">
                                <p class="font-weight-bold">
                                    ID Peminjaman : <?= $rent['id_rents'] ?>
                                </p>
                            </h3>
                            <br>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>ID sepeda</label>
                                        <p class="rounded border p-2">
                                            <a href="<?= site_url('bike/bikedetail/' . $rent['id_bikes']) ?>">
                                                <?= $rent['id_bikes'] ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Peminjam</label>
                                        <p class="rounded border p-2">
                                            <a href="<?= site_url('user/userdetail/' . $rent['npm']) ?>">
                                                <?= $rent['npm'] ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <p class="rounded border p-2">
                                            <?php if ($rent['status'] == 1) {
                                                echo '<span class="text-success">Kembali</span>';
                                            } elseif ($rent['status'] == 2) {
                                                echo '<span class="text-muted">Dipinjam</span>';
                                            } elseif ($rent['status'] == 3) {
                                                echo '<span class="text-danger">
                                                Overdue
                                                <i class="fas fa-exclamation-circle" style="color: red; font-size: 0.8em;"></i>
                                                </span>';
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Total waktu peminjaman</label>
                                        <p class="rounded border p-2">
                                            <?php if ($rent['total_waktu'] != null) {
                                                echo $rent['total_waktu'];
                                            } else {
                                                echo '<span class="text-muted">Sedang Dipinjam</span>';
                                            } ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Total jarak peminjaman</label>
                                        <p class="rounded border p-2">
                                            <?php if ($rent['waktu_kembali'] != null) {
                                                echo $rent['total_jarak'] . ' km';
                                            } else {
                                                echo '<span class="text-muted"> ' . $rent['total_jarak'] . ' km </span>';
                                            } ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-md-6 align-self-center">
                                    <div class="container-fluid">
                                        <div class="rounded p-3" style="border:dashed">
                                            <div class="text-center">
                                                <b>Log Keluar</b>
                                            </div>
                                            <br>
                                            <a>Waktu Keluar : <?= $rent['waktu_pinjam'] ?> WIB</a>
                                            <br>
                                            <a>Shelter Asal :
                                                <?= $rent['shelter_pinjam'] ?>
                                            </a>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rounded p-3" style="border:dashed">
                                            <div class="text-center">
                                                <b>Log Kembali</b>
                                            </div>
                                            <br>
                                            <a>
                                                Waktu Kembali :
                                                <?php if ($rent['waktu_kembali'] != null) {
                                                    echo $rent['waktu_kembali'] . ' WIB';
                                                } else {
                                                    echo '<span class="text-danger">Belum Kembali</span>';
                                                } ?>
                                            </a>
                                            <br>
                                            <a>Shelter Kembali :
                                                <?php if ($rent['shelter_kembali'] != null) {
                                                    echo $rent['shelter_kembali'];
                                                } else {
                                                    echo '<span class="text-danger">Belum Kembali</span>';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
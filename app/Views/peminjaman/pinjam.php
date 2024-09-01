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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="border border-dark bg-secondary mx-2">
                                        <span class="text-body pl-1">
                                            <i class="fa fa-filter mr-1"></i>
                                            ID Sepeda
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                    <div class="border border-dark bg-secondary mx-2">
                                        <span class="text-body pl-1">
                                            <i class="fa fa-filter mr-1"></i>
                                            NPM
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>

                        <div style="height: 30px;"></div>

                        <table id="dataRents" class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th class="align-middle col-sm-1">Id Transaksi</th>
                                    <th class="align-middle col-sm-1">Id Sepeda</th>
                                    <th class="align-middle col-sm-1">NPM</th>
                                    <th class="align-middle col-sm-1">Waktu Pinjam</th>
                                    <th class="align-middle col-sm-1">Waktu Kembali</th>
                                    <th class="align-middle col-sm-1">Total Waktu Peminjaman</th>
                                    <th class="align-middle col-sm-1">Total Jarak Peminjaman</th>
                                    <th class="align-middle col-sm-1">Status</th>
                                    <th class="align-middle col-sm-1">Aksi</th>
                                </tr>
                            </thead>

                            <?php foreach ($rents as $rent) { ?>
                                <tr>
                                    <td class="align-middle text-center">
                                        <?= $rent['id_rents'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $rent['id_bikes'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $rent['npm'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $rent['waktu_pinjam'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php if ($rent['waktu_kembali'] != null) {
                                            echo $rent['waktu_kembali'] . ' WIB';
                                        } else {
                                            echo '<span class="text-muted">Belum Kembali</span>';
                                        } ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php if ($rent['total_waktu'] != null) {
                                            echo $rent['total_waktu'];
                                        } else {
                                            echo '<span class="text-muted">Sedang Dipinjam</span>';
                                        } ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php if ($rent['waktu_kembali'] != null) {
                                            echo $rent['total_jarak'] . ' km';
                                        } else {
                                            echo '<span class="text-muted"> ' . $rent['total_jarak'] . ' km </span>';
                                        } ?>
                                    </td>
                                    <td class="align-middle text-center">
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
                                    </td>

                                    <td class="align-middle text-center">
                                        <a href="<?= site_url('rent/rentdetail/' . $rent['id_rents']) ?>"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>

    </div>

</section>
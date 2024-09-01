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
                                            Jurusan
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                    <div class="border border-dark bg-secondary mx-2">
                                        <span class="text-body pl-1">
                                            <i class="fa fa-filter mr-1"></i>
                                            Fakultas
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <div style="height: 30px;"></div>
                        <table id="dataUsers" class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th class="align-middle col-sm-1">NPM</th>
                                    <th class="align-middle col-sm-1">Nama</th>
                                    <th class="align-middle col-sm-1">No. telp</th>
                                    <th class="align-middle col-sm-1">Alamat</th>
                                    <th class="align-middle col-sm-1">Jurusan</th>
                                    <th class="align-middle col-sm-1">Fakultas</th>
                                    <th class="align-middle col-sm-1">Jumlah Peminjaman</th>
                                    <th class="align-middle col-sm-1">Total Waktu Peminjaman</th>
                                    <th class="align-middle col-sm-1">Aksi</th>
                                </tr>
                            </thead>

                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td class="text-center align-middle">
                                        <?= $user['npm'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['nama'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['telp_mhs'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['alamat'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['jurusan'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['fakultas'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['rents_users'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?= $user['total_rent_time'] ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="<?= site_url('user/userdetail/' . $user['npm']) ?>"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
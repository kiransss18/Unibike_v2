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
                                            Seri
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                    <div class="border border-dark bg-secondary mx-2">
                                        <span class="text-body pl-1">
                                            <i class="fa fa-filter mr-1"></i>
                                            Tahun
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>

                        <div style="height: 30px;"></div>

                        <table id="dataBikes" class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th class="align-middle col-sm-1">Id</th>
                                    <th class="align-middle col-sm-1">Foto</th>
                                    <th class="align-middle col-sm-1">Seri</th>
                                    <th class="align-middle col-sm-1">Tahun</th>
                                    <th class="align-middle col-sm-1">Status</th>
                                    <th class="align-middle col-sm-1">Persentase Baterai</th>
                                    <th class="align-middle col-sm-1">Jumlah Peminjaman</th>
                                    <th class="align-middle col-sm-1">Aksi</th>
                                </tr>
                            </thead>

                            <?php foreach ($bikes as $bike) { ?>
                                <tr>
                                    <td class="align-middle text-center">
                                        <?= $bike['id_bikes'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($bike['foto']); ?>"
                                            alt="Bike Image" height="64" width="64">
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $bike['seri'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $bike['tahun'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php
                                        $statusText = '';
                                        if ($bike['status'] == 1) {
                                            $statusText = 'Tersedia';
                                            $class = 'text-success';
                                        } elseif ($bike['status'] == 2) {
                                            $statusText = 'Dipinjam';
                                            $class = 'text-muted';
                                        } elseif ($bike['status'] == 3) {
                                            $statusText = 'Overdue';
                                            $class = 'text-danger';
                                        } elseif ($bike['status'] == 4) {
                                            $statusText = 'Tidak Tersedia';
                                            $class = 'text-warning';
                                        }
                                        ?>
                                        <span class="<?php echo $class; ?>"><?php echo $statusText; ?></span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php $baterai = $bike['baterai'];
                                        if ($baterai <= 30) {
                                            echo '<span class="bg-danger text-white"> ' . $baterai . '%</span>'; // red battery
                                        } elseif ($baterai <= 70) {
                                            echo '<span class="bg-warning text-dark"> ' . $baterai . '%</span>'; // yellow battery
                                        } else {
                                            echo '<span class="bg-success text-white"> ' . $baterai . '%</span>'; // green battery
                                        }
                                        ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $bike['rents_bikes'] ?>
                                    </td>


                                    <td class="align-middle text-center">
                                        <a href="<?= site_url('bike/bikedetail/' . $bike['id_bikes']) ?>"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="<?= site_url('bike/edit/' . $bike['id_bikes']) ?>"
                                            class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#deleteModal<?= $bike['id_bikes'] ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                        <div class="modal fade" id="deleteModal<?= $bike['id_bikes'] ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus sepeda dengan ID
                                                        <?= $bike['id_bikes'] ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('bike/delete/' . $bike['id_bikes']) ?>"
                                                            class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
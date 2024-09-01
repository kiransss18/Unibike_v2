<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('bikes') ?>">List Sepeda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">

                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 align-self-center">
                                    <div class="container-fluid">
                                        <div class="text-center mt-2">
                                            <img src="data:image/jpeg;base64,<?php echo base64_encode($bike['foto']); ?>"
                                                alt="Bike Image" class="img-fluid" width="320">
                                        </div>
                                        <br>
                                        <p class="text-center">
                                            Status :
                                            <?php
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
                                            echo '<span class="' . $class . '">' . $statusText . '</span>';
                                            ?>
                                        </p>
                                        <p class="text-center">
                                            baterai :
                                            <?php $baterai = $bike['baterai'];
                                            if ($baterai <= 30) {
                                                echo '<span class="text-danger"> ' . $baterai . '%</span>'; // red battery
                                            } elseif ($baterai <= 70) {
                                                echo '<span class="text-warning"> ' . $baterai . '%</span>'; // yellow battery
                                            } else {
                                                echo '<span class="text-success"> ' . $baterai . '%</span>'; // green battery
                                            }
                                            ?>
                                        </p>
                                        <p class="text-center">
                                            <button href="" class="btn btn1" data-toggle="modal" data-target="#mapModal"
                                                data-lat="<?php echo $bike['lat']; ?>"
                                                data-lng="<?php echo $bike['lng']; ?>" <?php if ($bike['status'] == 4) {
                                                       echo 'disabled';
                                                   } ?>>Cek Lokasi</button>
                                        </p>

                                        <!-- Modal -->
                                        <div class="modal fade" id="mapModal" tabindex="-1" role="dialog"
                                            aria-labelledby="mapModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="mapModalLabel">Lokasi Sepeda</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="map" style="height: 400px; width: 100%;"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <h3 class="text-primary">
                                        <span class="font-weight-bold">
                                            <?= $bike['id_bikes'] ?>
                                        </span>
                                        |
                                        <span>
                                            <?= $bike['seri'] ?>
                                        </span>
                                        <a href="<?= site_url('bike/edit/' . $bike['id_bikes']) ?>"
                                            class=" fa fa-pencil-alt"></a>
                                    </h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <p class="rounded border p-2">
                                                    <?= $bike['tahun'] ?>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Total Waktu Pemakaian</label>
                                                <p class="rounded border p-2">
                                                    <?= $bike['total_bike_times'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Peminjaman</label>
                                                <p class="rounded border p-2">
                                                    <?= $bike['rents_bikes'] ?>
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <label>Total Jarak Pemakaian</label>
                                                <p class="rounded border p-2">
                                                    <?= $bike['total_jarak'] . ' km' ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi Shelter</label>
                                        <p class="rounded border p-2">
                                            <?= $bike['nama_shelter'] ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <p class="rounded border p-2">
                                            <?= $bike['deskripsi'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
</section>
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

                        <table id="dataShelters" class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th class="align-middle col-sm-1">Id</th>
                                    <th class="align-middle col-sm-1">Nama</th>
                                    <th class="align-middle col-sm-1">Lokasi</th>
                                    <th class="align-middle col-sm-1">Jumlah Sepeda</th>
                                    <th class="align-middle col-sm-1">Aksi</th>
                                </tr>
                            </thead>

                            <?php foreach ($shelters as $shelter) { ?>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <?= $shelter['id_shelter'] ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?= $shelter['nama_shelter'] ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?= $shelter['lokasi'] ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?= $shelter['jumlah_sepeda'] ?>
                                            </td>


                                            <td class="align-middle text-center">
                                                <a href="<?= site_url('shelter/shelterdetail/' . $shelter['id_shelter']) ?>"
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
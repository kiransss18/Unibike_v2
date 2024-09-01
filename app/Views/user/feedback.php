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
                                            Jenis
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>

                        <div style="height: 30px;"></div>

                        <table id="dataFeedback" class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th class="align-middle col-sm-1">ID</th>
                                    <th class="align-middle col-sm-1">NPM</th>
                                    <th class="align-middle col-sm-1">Jenis</th>
                                    <th class="align-middle col-sm-1">Foto</th>
                                    <th class="align-middle col-sm-1">Isi</th>
                                    <th class="align-middle col-sm-1">Waktu</th>
                                </tr>
                            </thead>

                            <?php foreach ($feedbacks as $feedback) { ?>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <?= $feedback['id_feed'] ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?= $feedback['npm'] ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($feedback['jenis'] == 1) {
                                                    echo 'Kritik';
                                                } elseif ($feedback['jenis'] == 2) {
                                                    echo 'Saran';
                                                } elseif ($feedback['jenis'] == 3) {
                                                    echo 'Problem';
                                                }
                                                ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if (!empty($feedback['foto'])) { ?>
                                                            <img src="data:image/jpeg;base64,<?php echo base64_encode($feedback['foto']); ?>"
                                                                alt="Bike Image" height="128" width="128">
                                                <?php } else { ?>
                                                            -
                                                <?php } ?>
                                            </td>
                                            <td class="column-md-3">
                                                <div class="align-middle text-center">
                                                    <?= $feedback['isi'] ?>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?= $feedback['waktu'] ?>
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
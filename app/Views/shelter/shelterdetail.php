<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('shelters') ?>">List Shelter</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </div>
        </div> 
    </div> 
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md">
                            <h3 class="text-primary">
                                <span class="font-weight-bold">
                                    ID Shelter : <?= $shelter['id_shelter'] ?>
                                </span>
                            </h3>
                            <br>

                            <div class="form-group">
                                <label>Nama</label>
                                <p class="rounded border p-2">
                                    <?= $shelter['nama_shelter'] ?>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <p class="rounded border p-2">
                                    <?= $shelter['lokasi'] ?>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Sepeda</label>
                                <p class="rounded border p-2">
                                    <?= $shelter['jumlah_sepeda'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
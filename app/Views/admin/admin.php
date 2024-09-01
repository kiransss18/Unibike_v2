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
                                            Otoritas
                                        </span>
                                        <span class="filter-data"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>

                        <div style="height: 30px;"></div>

                        <table id="dataAdmin" class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th class="align-middle col-sm-1">id</th>
                                    <th class="align-middle col-sm-1">Nama</th>
                                    <th class="align-middle col-sm-1">Username</th>
                                    <th class="align-middle col-sm-1">Nomor Telepon</th>
                                    <th class="align-middle col-sm-1">Email</th>
                                    <th class="align-middle col-sm-1">Otoritas</th>
                                </tr>
                            </thead>

                            <?php foreach ($admins as $admin) { ?>
                                <tr>
                                    <td class="align-middle text-center">
                                        <?= $admin['id'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $admin['fullname'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= isset($admin['username']) ? $admin['username'] : '-' ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= isset($admin['telp_adm']) ? $admin['telp_adm'] : '-' ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $admin['email'] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php if ($admin['group_id'] == 1) {
                                            echo 'Admin';
                                        } elseif ($admin['group_id'] == 2) {
                                            echo 'Super Admin';
                                        }
                                        ?>
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
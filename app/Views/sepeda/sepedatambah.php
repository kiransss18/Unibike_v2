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
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6 p-3">
                                    <div class="form-group">
                                        <label for="id_bikes">ID Sepeda</label>
                                        <input type="text"
                                            class="form-control <?php if (isset($_POST['submit']) && session('errors.id_bikes')): ?>is-invalid<?php endif ?>"
                                            id="id_bikes" name="id_bikes"
                                            value="<?php echo isset($_POST['id_bikes']) ? $_POST['id_bikes'] : '' ?>">
                                        <?php if (isset($_POST['submit']) && session('errors.id_bikes')): ?>
                                            <div class="invalid-feedback"><?= session('errors.id_bikes') ?></div>
                                        <?php endif ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="seri">Seri</label>
                                        <input type="text"
                                            class="form-control <?php if (isset($_POST['submit']) && session('errors.seri')): ?>is-invalid<?php endif ?>"
                                            id="seri" name="seri"
                                            value="<?php echo isset($_POST['seri']) ? $_POST['seri'] : '' ?>">
                                        <?php if (isset($_POST['submit']) && session('errors.seri')): ?>
                                            <div class="invalid-feedback"><?= session('errors.seri') ?></div>
                                        <?php endif ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <select
                                            class="custom-select <?php if (isset($_POST['submit']) && session('errors.tahun')): ?>is-invalid<?php endif ?>"
                                            id="tahun" name="tahun">
                                            <option disabled selected>pilih tahun</option>
                                            <?php for ($year = 2019; $year <= 2025; $year++) { ?>
                                                <option <?php if (isset($_POST['tahun']) && $_POST['tahun'] == $year)
                                                    echo 'selected'; ?>>
                                                    <?= $year ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <?php if (isset($_POST['submit']) && session('errors.tahun')): ?>
                                            <div class="invalid-feedback"><?= session('errors.tahun') ?></div>
                                        <?php endif ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file"
                                            class="form-control-file <?php if (isset($_POST['submit']) && session('errors.foto')): ?>is-invalid<?php endif ?>"
                                            id="foto" name="foto"
                                            value="<?php echo isset($_POST['foto']) ? $_POST['foto'] : '' ?>">
                                        <?php if (isset($_POST['submit']) && session('errors.foto')): ?>
                                            <div class="invalid-feedback"><?= session('errors.foto') ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>


                                <div class="col-md-6 p-3">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi"
                                            value="<?php echo isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '' ?>"></textarea>
                                        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.config.autoParagraph = false;
                                            CKEDITOR.replace('deskripsi', {
                                                height: 200,
                                                toolbar: [
                                                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                                                    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                                                    { name: 'links', items: ['Link', 'Unlink'] },
                                                    { name: 'insert', items: ['Image', 'Table'] },
                                                    { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
                                                    { name: 'colors', items: ['TextColor', 'BGColor'] },
                                                    { name: 'tools', items: ['Maximize', 'ShowBlocks'] }
                                                ],

                                            });
                                        </script>
                                    </div>

                                    <br>

                                    <div class="fixed">
                                        <div class="float-right">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        onclick="location.href='<?php echo site_url('bikes') ?>'">Batal</button>
                                                </div>
                                                <div class="col-sm">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-1">
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
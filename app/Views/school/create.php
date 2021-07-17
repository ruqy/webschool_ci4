<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Sekolah</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>

        <div class="card-body">
            <?php
            $errors = session()->getFlashdata('errors');
            // echo ($errors['name']) ? 'ERROR NAMA ADA' : 'ERROR TIDAK ADA';
            ?>
            <form class="form-horizontal" action="<?= base_url('/school/add'); ?>" method="POST"
                enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Nama Sekolah" name="name"
                            value="<?= old('name'); ?>">
                        <?php if (!empty($errors['name'])) { ?>
                        <div class="text-sm text-danger">
                            <?= $errors['name']; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="Alamat Sekolah" name="address"
                            value="<?= old('address'); ?>">
                        <?php if (!empty($errors['address'])) { ?>
                        <div class="text-sm text-danger">
                            <?= $errors['address']; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email Sekolah" name="email"
                            value="<?= old('email'); ?>">
                        <?php if (!empty($errors['email'])) { ?>
                        <div class="text-sm text-danger">
                            <?= $errors['email']; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone_number" class="col-sm-2 col-form-label">Kontak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone_number" placeholder="Nomor Telepon Sekolah"
                            name="phone_number" value="<?= old('phone_number'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="website" class="col-sm-2 col-form-label">Website</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="website" placeholder="Alamat Website Sekolah"
                            name="website" value="<?= old('website'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fax" class="col-sm-2 col-form-label">Fax</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fax" placeholder="Fax Sekolah" name="fax"
                            value="<?= old('fax'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo">
                            <label class="custom-file-label" for="logo">
                                <?php if (!empty($errors['logo'])) { ?>
                                <div class="text-sm text-danger">
                                    <?= $errors['logo']; ?>
                                </div>
                                <?php } else { ?>
                                Pilih Logo
                                <?php } ?>
                            </label>
                        </div>
                    </div>
                </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-dark">Tambah</button>
            <button type="submit" class="btn btn-default float-right">Batal</button>
        </div>
        </form>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>

<?= $this->endSection() ?>
<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<?php $errors = session()->getFlashdata('errors'); ?>
<form class="form-horizontal" action="<?= base_url('/school/update'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= $school['id']; ?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Nama Sekolah" name="name"
                value="<?= (!empty(old('name'))) ? old('name') : $school['school_name']; ?>">
            <?php if (!empty($errors['school_name'])) { ?>
            <div class="text-sm text-danger">
                <?= $errors['school_name']; ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="address" placeholder="Alamat Sekolah" name="address"
                value="<?= (!empty(old('address'))) ? old('address') : $school['address']; ?>">
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
                value="<?= (!empty(old('email'))) ? old('email') : $school['email']; ?>">
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
                name="phone_number"
                value="<?= (!empty(old('phone_number'))) ? old('phone_number') : $school['phone_number']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="website" class="col-sm-2 col-form-label">Website</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="website" placeholder="Alamat Website Sekolah" name="website"
                value="<?= (!empty(old('website'))) ? old('website') : $school['website']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="fax" class="col-sm-2 col-form-label">Fax</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fax" placeholder="Fax Sekolah" name="fax"
                value="<?= (!empty(old('fax'))) ? old('fax') : $school['fax']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="logo" class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-10">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="logo" name="logo">
                <label class=" custom-file-label" for="logo">
                    <?php if (!empty($errors['logo'])) { ?>
                    <div class="text-sm text-danger">
                        <?= $errors['logo']; ?>
                    </div>
                    <?php } else { ?>
                    Pilih File
                    <?php } ?>
                </label>
            </div>
        </div>
    </div>
    <div class="float-right">
        <button type="submit" class="btn btn-dark mr-1">Ubah</button>
        <a href="/school" type="submit" class="btn btn-default">Batal</a>
    </div>
</form>
<?= $this->endSection() ?>
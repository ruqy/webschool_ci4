<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/add'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Divisi</h4>
    <input type="hidden" name="form" value="Divisi">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Nama divisi" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" placeholder="Deskripsi divisi" name="desc">
        </div>
    </div>
    <div class="form-group row">
        <label for="headmaster_id" class="col-sm-2 col-form-label">Kepala Sekolah</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="headmaster_id">
                <option selected="selected" value="1">Dra. Hj. Rossa Rohsunah, M.Pd</option>
                <option value="2">Anda Suhanda, S.Sy</option>
                <option value="3">Andri Kusnadi, S.Pd</option>
                <option value="4">Oyib Abdurrahman, S.Pd.I</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Aktif
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                <label class="form-check-label" for="exampleRadios2">
                    Non Aktif
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Tambah</button>
    <a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>
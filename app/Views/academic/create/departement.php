<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/add'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Divisi</h4>
    <input type="hidden" name="form" value="divisi">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="divisi" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="departement" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="departement_id">
                <option value="0">Pilih divisi</option>
                <?php foreach ($departement as $d) { ?>
                <option value="<?= $d['id']; ?>"><?= $d['departement_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" placeholder="Deskripsi divisi" name="desc">
        </div>
    </div>
    <div class="form-group row">
        <label for="start_date" class="col-sm-2 col-form-label">Awal Tahun</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="start_date" placeholder="contoh 21 Juli 2021 .."
                name="start_date">
        </div>
    </div>
    <div class="form-group row">
        <label for="end_date" class="col-sm-2 col-form-label">Akhir Tahun</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="end_date" placeholder="contoh 12 Juni 2022 .." name="end_date">
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Tambah</button>
    <a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>
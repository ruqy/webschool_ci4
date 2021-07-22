<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Angkatan</h4>
    <input type="hidden" name="form" value="Angkatan">
    <input type="hidden" name="id" value="<?= $generation['id']; ?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Nama Angkatan" name="name"
                value="<?= (empty(old('name'))) ? $generation['name'] : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" placeholder="Deskripsi Angkatan" name="desc"
                value="<?= (empty(old('name'))) ? $generation['desc'] : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="departement" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="departement_id">
                <option value="0">Pilih divisi</option>
                <?php foreach ($departements as $d) { ?>
                <option value="<?= $d['departement_id']; ?>"
                    <?= ($generation['departement_id'] == $d['departement_id']) ? 'selected="selected"' : ''; ?>>
                    <?= $d['departement_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1"
                    <?= ($generation['status'] == "1") ? "checked" : ""; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Aktif
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0"
                    <?= ($generation['status'] == "0") ? "checked" : ""; ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Non Aktif
                </label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-dark">Ubah</button>
    <a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>
<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Semester</h4>
    <input type="hidden" name="form" value="Semester">
    <input type="hidden" name="id" value="<?= $semester['id']; ?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"
                value="<?= (empty(old('name'))) ? $semester['name'] : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" name="desc"
                value="<?= (empty(old('desc'))) ? $semester['desc'] : old('desc'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="departement" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="departement_id">
                <option value="0">Pilih divisi</option>
                <?php foreach ($departements as $d) { ?>
                <option value="<?= $d['departement_id']; ?>"
                    <?= ($semester['departement_id'] == $d['departement_id']) ? 'selected="selected"' : ''; ?>>
                    <?= $d['departement_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Ubah</button>
    <a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>
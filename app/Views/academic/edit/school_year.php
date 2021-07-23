<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Tahun Pelajaran</h4>
    <input type="hidden" name="form" value="Tahun Pelajaran">
    <input type="hidden" name="id" value="<?= $school_year['school_year_id']; ?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"
                value="<?= (empty(old('name'))) ? $school_year['school_year_name'] : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="departement" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="departement_id">
                <option value="0">Pilih divisi</option>
                <?php foreach ($departements as $d) { ?>
                <option value="<?= $d['departement_id']; ?>"
                    <?= ($school_year['departement_id'] == $d['departement_id']) ? 'selected="selected"' : ''; ?>>
                    <?= $d['departement_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" name="desc"
                value="<?= (empty(old('desc'))) ? $school_year['school_year_desc'] : old('desc'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="start_date" class="col-sm-2 col-form-label">Awal Tahun</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="start_date" name="start_date"
                value="<?= (empty(old('start_date'))) ? $school_year['start_date'] : old('start_date'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="end_date" class="col-sm-2 col-form-label">Akhir Tahun</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="end_date" name="end_date"
                value="<?= (empty(old('end_date'))) ? $school_year['end_date'] : old('end_date'); ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-dark">Ubah</button>
    <a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>
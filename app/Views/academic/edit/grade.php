<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Kelas</h4>
    <input type="hidden" name="form" value="Kelas">
    <input type="hidden" name="id" value="<?= $grade['id']; ?>">
    <div class="form-group row">
        <label for="departement" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="departement_id">
                <option value="0">Pilih divisi</option>
                <?php foreach ($departements as $d) { ?>
                <option value="<?= $d['departement_id']; ?>"
                    <?= ($grade['departement_id'] == $d['departement_id']) ? 'selected="selected"' : ''; ?>>
                    <?= $d['departement_name']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" placeholder="Deskripsi Kelas" name="desc"
                value="<?= (empty(old('desc'))) ? $grade['desc'] : old('desc'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="levels" class="col-sm-2 col-form-label">Tingkat</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="level_id">
                <option value="0">Pilih
                    tingkat</option>
                <?php foreach ($levels as $l) : ?>
                <option value="<?= $l['level_id']; ?>"
                    <?= ($grade['level_id'] == $l['level_id']) ? 'selected="selected"' : ''; ?>>
                    <?= $l['level_name']; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="school_year" class="col-sm-2 col-form-label">Tahun Ajaran</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="school_year">
                <option selected="selected" value="0" selected>Pilih tingkat</option>
                <?php foreach ($school_years as $l) : ?>
                <option value="<?= $l['school_year_id']; ?>"
                    <?= ($grade['school_year_id'] == $l['school_year_id']) ? 'selected="selected"' : ''; ?>>
                    <?= $l['school_year_name']; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Kelas" name="name"
                value="<?= (empty(old('name'))) ? $grade['name'] : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="teacher_id" class="col-sm-2 col-form-label">Guru</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="teacher_id">
                <option selected="selected" value="1">Guru 1</option>
                <option value="2">Guru 2</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="capacity" class="col-sm-2 col-form-label">Kapasitas</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="capacity" name="capacity"
                value="<?= (empty(old('capacity'))) ? $grade['capacity'] : old('capacity'); ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="current_capacity" name="current_capacity"
                value="<?= (empty(old('current_capacity'))) ? $grade['current_capacity'] : old('current_capacity'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1"
                    <?= ($grade['status'] == "1") ? "checked" : ""; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Aktif
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0"
                    <?= ($grade['status'] == "0") ? "checked" : ""; ?>>
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
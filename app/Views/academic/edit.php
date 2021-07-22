<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
<?php
//filter data untuk cek form setiap tipe

switch ($form) {
    case 'school_years':
        $name = $school_year['name'];
        $desc = $school_year['desc'];
        break;
    case 'departements':
        $name = $departement['departement_name'];
        $desc = $departement['departement_desc'];
        $status = $departement['departement_status'];
        break;
    case 'levels':
        $name = $level['level_name'];
        $desc = $level['level_desc'];
        break;
    case 'grades':
        $name = $grade['name'];
        $desc = $grade['desc'];
        $status = $grade['status'];
        break;
    case 'semesters':
        $name = $semester['name'];
        $desc = $semester['desc'];
        break;
    case 'generations':
        $name = $generation['name'];
        $desc = $generation['desc'];
        $status = $generation['status'];
        break;
}
?>

<form action="<?= base_url('academic/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3"><?= $form_title; ?></h4>
    <input type="hidden" name="form" value="<?= $form_title; ?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"
                value="<?= (empty(old('name'))) ? $name : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" placeholder="Deskripsi <?= $form_title; ?>" name="desc"
                value="<?= (empty(old('desc'))) ? $name : old('desc'); ?>">
        </div>
    </div>
    <?php if ($form_title != 'Divisi') { ?>
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
    <?php } else { ?>
    <div class="form-group row">
        <label for="headmaster_id" class="col-sm-2 col-form-label">Kepala Sekolah</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="headmaster_id">
                <option selected="selected">Dra. Hj. Rossa Rohsunah, M.Pd</option>
                <option value="">Anda Suhanda, S.Sy</option>
                <option value="">Andri Kusnadi, S.Pd</option>
                <option value="">Oyib Abdurrahman, S.Pd.I</option>
            </select>
        </div>
    </div>
    <?php } ?>

    <?php if ($form_title == 'Tahun Pelajaran') { ?>
    <div class="form-group row">
        <label for="start_date" class="col-sm-2 col-form-label">Awal Tahun</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="start_date" placeholder="<?= $school_year['start_date']; ?>"
                name="start_date">
        </div>
    </div>
    <div class="form-group row">
        <label for="end_date" class="col-sm-2 col-form-label">Akhir Tahun</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="end_date" placeholder="<?= $school_year['end_date']; ?>"
                name="end_date">
        </div>
    </div>
    <?php } ?>

    <?php if ($form_title == 'Kelas') { ?>
    <div class="form-group row">
        <label for="levels" class="col-sm-2 col-form-label">Tingkat</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="levels">
                <option selected="selected" value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="school_years" class="col-sm-2 col-form-label">Tahun Pelajaran</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="school_year">
                <?php foreach ($school_year as $s) { ?>
                <option value="<?= $s['id']; ?>"><?= $s['name']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="teacher_id" class="col-sm-2 col-form-label">Guru</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="teacher_id">
                <option selected="selected" value="Guru1">Guru 1</option>
                <option value="Guru2">Guru 2</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="teacher_id" class="col-sm-2 col-form-label">Kapasitas</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="capacity" name="capacity"
                value="<?= (empty(old('capacity'))) ? $grade['capacity'] : old('capacity'); ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="current_capacity" name="current_capacity"
                value="<?= (empty(old('current_capacity'))) ? $grade['current_capacity'] : old('current_capacity'); ?>">
        </div>
    </div>
    <?php } ?>

    <?php if ($form_title == 'Divisi' || $form_title == 'Kelas' || $form_title == 'Angkatan') { ?>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1"
                    <?= ($status == '1') ? "checked" : ""; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Aktif
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0"
                    <?= ($status == '0') ? "checked" : ""; ?>>>
                <label class="form-check-label" for="exampleRadios2">
                    Non Aktif
                </label>
            </div>
        </div>
    </div>
    <?php } ?>

    <button type="submit" class="btn btn-dark">Ubah</button>
    <a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>
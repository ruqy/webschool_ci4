<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('academic/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <h4 class="mb-3">Divisi</h4>
    <input type="hidden" name="form" value="Divisi">
    <input type="hidden" name="id" value="<?= $departement['departement_id']; ?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="divisi" name="name"
                value="<?= (empty(old('name'))) ? $departement['departement_name'] : old('name'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desc" placeholder="Deskripsi divisi" name="desc"
                value="<?= (empty(old('desc'))) ? $departement['departement_desc'] : old('desc'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="headmaster_id" class="col-sm-2 col-form-label">Kepala Sekolah</label>
        <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="headmaster_id">
                <option value="1" <?= ($departement['headmaster_id'] == "1") ? 'selected="selected"' : ""; ?>>Dra. Hj.
                    Rossa
                    Rohsunah, M.Pd</option>
                <option value="2" <?= ($departement['headmaster_id'] == "2") ? 'selected="selected"' : ""; ?>>Anda
                    Suhanda,
                    S.Sy</option>
                <option value="3" <?= ($departement['headmaster_id'] == "3") ? 'selected="selected"' : ""; ?>>Andri
                    Kusnadi,
                    S.Pd</option>
                <option value="4" <?= ($departement['headmaster_id'] == "4") ? 'selected="selected"' : ""; ?>>Oyib
                    Abdurrahman,
                    S.Pd.I</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1"
                    <?= ($departement['departement_status'] == "1") ? "checked" : ""; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Aktif
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0"
                    <?= ($departement['departement_status'] == "0") ? "checked" : ""; ?>>
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
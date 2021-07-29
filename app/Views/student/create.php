<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<?php
$errors = session()->getFlashdata('errors');
// echo ($errors['name']) ? 'ERROR NAMA ADA' : 'ERROR TIDAK ADA';
?>
<form class="form-horizontal" action="<?= base_url('/student/create'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="row">
        <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills mr-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Wali</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Administrasi</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content ">
                        <div class="tab-pane callout callout-info active" id="tab_1">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap"
                                        name="name" value="<?= old('name'); ?>">
                                    <?php if (!empty($errors['name'])) { ?>
                                    <div class="text-sm text-danger">
                                        <?= $errors['name']; ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Alamat lengkap"
                                        name="address" value="<?= old('address'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Kode Pos"
                                        name="postal_code" value="<?= old('postal_code'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Agama"
                                        name="religion" value="<?= old('religion'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">TTL</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="name" placeholder="Alamat lahir"
                                        name="place_of_birth" value="<?= old('place_of_birth'); ?>">
                                </div>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="name" name="birthday"
                                        value="<?= old('birthday'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="origin_school"
                                        value="<?= old('origin_school'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Cita Cita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="future_goals"
                                        value="<?= old('future_goals'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor Kontak</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="name" placeholder="Nomor utama"
                                        name="phone_number" value="<?= old('phone_number'); ?>">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="name" placeholder="Nomor alternatif"
                                        name="phone_number_second" value="<?= old('phone_number_second'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Data Kesehatan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="name" placeholder="Berat badan (kg)"
                                        name="weight" value="<?= old('weight'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="name" placeholder="Tinggi badan (cm)"
                                        name="height" value="<?= old('height'); ?>">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="name" placeholder="Gol darah"
                                        name="blood_group" value="<?= old('blood_group'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Anak Ke</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="name" placeholder="Anak ke"
                                        name="child_number" value="<?= old('child_number'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="L" checked>
                                        <label class="form-check-label">Laki-Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="P">
                                        <label class="form-check-label">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.tab-pane -->
                        <div class="tab-pane callout callout-info" id="tab_2">
                            <div class="form-group row">
                                <label for="parent" class="col-sm-2 col-form-label">Nomor NIK</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="NIK ayah"
                                        name="father_nik" value="<?= old('father_nik'); ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="NIK ibu"
                                        name="mother_nik" value="<?= old('mother_nik'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="parent" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="Nama ayah"
                                        name="father_name" value="<?= old('father_name'); ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="Nama ibu"
                                        name="mother_name" value="<?= old('mother_name'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="parent" class="col-md-2 col-form-label">Pekerjaan</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="Pekerjaan ayah"
                                        name="father_profession" value="<?= old('father_profession'); ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="Pekerjaan ibu"
                                        name="mother_profession" value="<?= old('mother_profession'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="parent" class="col-md-2 col-form-label">Pendidikan</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="Pendidikan ayah"
                                        name="father_education" value="<?= old('father_education'); ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="parent" placeholder="Pendidikan ibu"
                                        name="mother_education" value="<?= old('mother_education'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="parent" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-5">
                                    <input type="date" class="form-control" id="parent" name="father_birthday"
                                        value="<?= old('father_birthday'); ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="date" class="form-control" id="parent" placeholder="Tanggal lahir ibu"
                                        name="mother_birthday" value="<?= old('mother_birthday'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="parent" class="col-md-2 col-form-label">Pendapatan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="parent"
                                        placeholder="Penghasilan orang tua" name="parent_salary"
                                        value="<?= old('parent_salary'); ?>">
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor Ijazah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="ijazah_number"
                                        value="<?= old('ijazah_number'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor Induk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="induk_number"
                                        value="<?= old('induk_number'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor Pendaftaran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="participants_number"
                                        value="<?= old('participant_number'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor SKHUN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="skhun_number"
                                        value="<?= old('skhun_number'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Tahun STTB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="sttb_year"
                                        value="<?= old('sttb_year'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor NISN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="nisn"
                                        value="<?= old('nisn'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor KK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="kk_number"
                                        value="<?= old('kk_number'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nomor NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="nik_number"
                                        value="<?= old('nik_number'); ?>">
                                </div>
                            </div>



                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="float-right">
        <button type="submit" class="btn btn-dark mr-1">Tambah</button>
        <a href="/school" type="submit" class="btn btn-default">Batal</a>
    </div>
</form>
<!-- /.card-footer-->
<?= $this->endSection() ?>
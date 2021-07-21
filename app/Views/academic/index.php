<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
<?php if (!empty(session()->getFlashdata('pesan'))) { ?>
<div class="alert <?= session()->getFlashdata('alert'); ?> alert-dismissible fade show" role="alert">
    <strong><?= session()->getFlashdata('form'); ?></strong> berhasil
    <strong><?= session()->getFlashdata('pesan'); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tahun Ajaran</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <?php if (!empty($school_years)) { ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Tahun Ajaran</th>
                            <th>Divisi</th>
                            <th>Awal Tahun</th>
                            <th>Akhir Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($school_years as $s) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $s['name']; ?></td>
                            <td><?= $s['school_name']; ?></td>
                            <td><?= $s['start_date']; ?></td>
                            <td><?= $s['end_date']; ?></td>
                            <td class="text-center">
                                <form action="<?= base_url('/academic/' . $s['id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="form" value="Tahun Pelajaran">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('apakah anda yakin?')"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">Data masih kosong</div>
                <?php } ?>
                <a href="<?= base_url('/academic/add/school_years'); ?>" class="btn btn-secondary mt-3 d-block"><i
                        class="fas fa-plus-circle"></i></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Semester</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Semester</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>SMA Sumur Bandung</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/academic/add/semesters'); ?>" class="btn btn-secondary mt-3 d-block">
                    <i class="fas fa-plus-circle"></i>
                </a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Divisi</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Divisi</th>
                            <th>Kepala Sekolah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>SMA Sumur Bandung</td>
                            <td>Anda Suhanda</td>
                            <td>aktif</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/academic/add/departements'); ?>" class="btn btn-secondary d-block mt-3"><i
                        class="fas fa-plus-circle"></i></a>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tingkat</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Tingkat</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10</td>
                            <td>SMA Sumur Bandung</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/academic/add/levels'); ?>" class="btn btn-secondary d-block mt-3"><i
                        class="fas fa-plus-circle"></i></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kelas</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Kelas</th>
                            <th>Divisi</th>
                            <th>Tingkat</th>
                            <th>Kapasitas</th>
                            <th>Jumlah Siswa</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10 MIPA</td>
                            <td>SMA Sumur Bandung</td>
                            <td>10</td>
                            <td>30</td>
                            <td>20</td>
                            <td>aktif</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/academic/add/grades'); ?>" class="btn btn-secondary d-block mt-3"><i
                        class="fas fa-plus-circle"></i></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Angkatan</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Angkatan</th>
                            <th>Divisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2021-2022</td>
                            <td>SMA Sumur Bandung</td>
                            <td>aktif</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/academic/add/generations'); ?>" class="btn btn-secondary d-block mt-3"><i
                        class="fas fa-plus-circle"></i></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>
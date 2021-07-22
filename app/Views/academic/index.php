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
                <?php if (!empty($departements)) { ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" class="text-center">#</th>
                            <th width="60px">Divisi</th>
                            <th>Kepala Sekolah</th>
                            <th>Deskripsi</th>
                            <th width="60px">Status</th>
                            <th width="120px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($departements as $d) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td>
                                <a data-toggle="tooltip" title="detil divisi"
                                    href="<?= base_url('/academic/show/Divisi/' . $d['departement_id']); ?>"><?= $d['departement_name']; ?></a>
                            </td>
                            <td><?= $d['headmaster_id']; ?></td>
                            <td><?= $d['departement_desc']; ?></td>
                            <td class="text-center">
                                <?= ($d['departement_status']) ? '<i class="fas fa-check-square text-success"></i>' : '<i class="fas fa-square text-secondary"></i>'; ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('/academic/edit/departement/' . $d['departement_id']); ?>"
                                    class="btn btn-sm btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <form action="<?= base_url('/academic/' . $d['departement_id']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="form" value="Divisi">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('apakah anda yakin?')"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">Data masih kosong</div>
                <?php } ?>
                <a href="<?= base_url('/academic/add/departement'); ?>" class="btn btn-secondary d-block mt-3"><i
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
                <?php if (!empty($levels)) { ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" class="text-center">#</th>
                            <th>Tingkat</th>
                            <th width="60px">Divisi</th>
                            <th>Deskripsi</th>
                            <th width="120px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($levels as $s) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td>
                                <a data-toggle="tooltip" title="detil tingkat"
                                    href="<?= base_url('/academic/show/Tingkat/' . $s['level_id']); ?>"><?= $s['level_name']; ?></a>
                            </td>
                            <td><?= $s['departement_name']; ?></td>
                            <td><?= $s['level_desc']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('/academic/edit/level/' . $s['level_id']); ?>"
                                    class="btn btn-sm btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <form action="<?= base_url('/academic/' . $s['level_id']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="form" value="Tingkat">
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
                <a href="<?= base_url('/academic/add/level'); ?>" class="btn btn-secondary d-block mt-3"><i
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
                            <th width="60px" class="text-center">#</th>
                            <th>Tahun Ajaran</th>
                            <th width="60px">Divisi</th>
                            <th>Deskripsi</th>
                            <th>Durasi</th>
                            <th width="120px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($school_years as $s) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td>
                                <a data-toggle="tooltip" data-placement="top" title="detil sekolah"
                                    href="<?= base_url('/academic/show/Tahun Pelajaran/' . $s['school_year_id']); ?>"><?= $s['school_year_name']; ?></a>
                            </td>
                            <td><?= $s['departement_name']; ?></td>
                            <td><?= $s['school_year_desc']; ?></td>
                            <td><i class="fas fa-calendar mr-3"></i><?= date("d-m-Y", strtotime($s['start_date'])); ?>
                                sd <?= date("d-m-Y", strtotime($s['end_date'])); ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('/academic/edit/school_year/' . $s['school_year_id']); ?>"
                                    class="btn btn-sm btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <form action="<?= base_url('/academic/' . $s['school_year_id']); ?>" method="post"
                                    class="d-inline">
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
                <a href="<?= base_url('/academic/add/school_year'); ?>" class="btn btn-secondary mt-3 d-block"><i
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
                <?php if (!empty($semesters)) { ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" class="text-center">#</th>
                            <th>Semester</th>
                            <th width="60px">Divisi</th>
                            <th>Deskripsi</th>
                            <th width="120px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($semesters as $d) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td>
                                <a data-toggle="tooltip" title="detil semester"
                                    href="<?= base_url('/academic/show/Semester/' . $d['id']); ?>"><?= $d['name']; ?></a>
                            </td>
                            <td><?= $d['departement_name']; ?></td>
                            <td><?= $d['desc']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('/academic/edit/semester/' . $d['id']); ?>"
                                    class="btn btn-sm btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <form action="<?= base_url('/academic/' . $d['id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="form" value="Semester">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('apakah anda yakin?')"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">Data masih kosong</div>
                <?php } ?>
                <a href="<?= base_url('/academic/add/semester'); ?>" class="btn btn-secondary mt-3 d-block">
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
                <?php if (!empty($grades)) { ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" class="text-center">#</th>
                            <th>Nama Kelas</th>
                            <th width="60px">Divisi</th>
                            <th>Tingkat</th>
                            <th>Kapasitas</th>
                            <th>Jumlah Siswa</th>
                            <th width="60px">Status</th>
                            <th width="120px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($grades as $d) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td>
                                <a data-toggle="tooltip" title="detil kelas"
                                    href="<?= base_url('/academic/show/Kelas/' . $d['id']); ?>"><?= $d['name']; ?></a>
                            </td>
                            <td><?= $d['departement_name']; ?></td>
                            <td><?= $d['level_name']; ?></td>
                            <td><?= $d['capacity']; ?></td>
                            <td><?= $d['current_capacity']; ?></td>
                            <td class="text-center">
                                <?= ($d['status']) ? '<i class="fas fa-check-square text-success"></i>' : '<i class="fas fa-square text-secondary"></i>'; ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('/academic/edit/grade/' . $d['id']); ?>"
                                    class="btn btn-sm btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <form action="<?= base_url('/academic/' . $d['id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="form" value="Kelas">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('apakah anda yakin?')"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">Data masih kosong</div>
                <?php } ?>
                <a href="<?= base_url('/academic/add/grade'); ?>" class="btn btn-secondary d-block mt-3"><i
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
                <?php if (!empty($generations)) { ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" class="text-center">#</th>
                            <th>Angkatan</th>
                            <th width="60px">Divisi</th>
                            <th>Deskripsi</th>
                            <th width="60px">Status</th>
                            <th width="120px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($generations as $d) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td>
                                <a data-toggle="tooltip" title="detil angkatan"
                                    href="<?= base_url('/academic/show/Angkatan/' . $d['id']); ?>"><?= $d['name']; ?></a>
                            </td>
                            <td><?= $d['departement_name']; ?></td>
                            <td><?= $d['desc']; ?></td>
                            <td class="text-center">
                                <?= ($d['status']) ? '<i class="fas fa-check-square text-success"></i>' : '<i class="fas fa-square text-secondary"></i>'; ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('/academic/edit/generation/' . $d['id']); ?>"
                                    class="btn btn-sm btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <form action="<?= base_url('/academic/' . $d['id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="form" value="Angkatan">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('apakah anda yakin?')"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">Data masih kosong</div>
                <?php } ?>
                <a href="<?= base_url('/academic/add/generation'); ?>" class="btn btn-secondary d-block mt-3"><i
                        class="fas fa-plus-circle"></i></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>


<a href="/student/new" class="btn btn-dark mb-3">Tambah Data</a>
<?php if (!empty(session()->getFlashdata('pesan'))) { ?>
<div class="alert <?= session()->getFlashdata('alert'); ?> alert-dismissible fade show" role="alert">
    Data siswa berhasil <strong><?= session()->getFlashdata('pesan'); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
<?php if (!empty($students)) { ?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">No. Induk</th>
            <th scope="col">Nama</th>
            <th scope="col">NISN</th>
            <th scope="col">L/P</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($students as $d) : ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><a href="<?= base_url('/student/show/' . $d['id']); ?>"><?= $d['induk_number']; ?></a></td>
            <td><?= $d['name']; ?></td>
            <td><?= $d['nisn']; ?></td>
            <td><?= $d['gender']; ?></td>
            <td>
                <a href="" class="btn btn-warning btn-sm text-light"><i class="fas fa-edit"></i></a>
                <form action="<?= base_url('/student/' . $d['id']); ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php } else { ?>
<p>Data masih kosong silahkan menambahkan data baru</p>
<?php } ?>

<?= $this->endSection() ?>
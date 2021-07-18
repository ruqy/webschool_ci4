<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>


<a href="/school/add" class="btn btn-dark mb-3">Tambah Data</a>
<?php if (!empty(session()->getFlashdata('pesan'))) { ?>
<div class="alert <?= session()->getFlashdata('alert'); ?> alert-dismissible fade show" role="alert">
    Data sekolah berhasil <strong><?= session()->getFlashdata('pesan'); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
<?php if (!empty($school)) { ?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Kontak</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($school as $d) : ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><a href="<?= base_url('/school/show/' . $d['id']); ?>"><?= $d['name']; ?></a></td>
            <td><?= $d['email']; ?></td>
            <td><?= $d['phone_number']; ?></td>
            <td>
                <form action="<?= base_url('/school/' . $d['id']); ?>" method="post" class="d-inline">
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
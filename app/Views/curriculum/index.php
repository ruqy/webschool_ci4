<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>


<a href="/curriculum/add" class="btn btn-dark mb-3">Tambah Data</a>
<?php if (!empty(session()->getFlashdata('pesan'))) { ?>
<div class="alert <?= session()->getFlashdata('alert'); ?> alert-dismissible fade show" role="alert">
    Data kurikulum berhasil <strong><?= session()->getFlashdata('pesan'); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>


<?= $this->endSection() ?>
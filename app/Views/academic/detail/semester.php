<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h1><?= $form; ?></h1>
<h2><?= $data['name']; ?></h2>
<p>"<?= $data['desc']; ?>"</p>

<a href="<?= base_url('/academic/edit/semester/' . $data['id']); ?>" class="btn btn-warning mr-1">Edit</a>
<a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Kembali</a>
<?= $this->endSection() ?>
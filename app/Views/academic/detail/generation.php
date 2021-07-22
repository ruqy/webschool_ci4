<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h1><?= $form; ?></h1>
<h2><?= $data['name']; ?></h2>
<p><?= $data['departement_name']; ?></p>
<p>"<?= $data['desc']; ?>"</p>
<p>
    <?= ($data['status'] == "1") ? '<i class="fas fa-check-square text-success text-lg"></i>' : '<i class="fas fa-square text-secondary text-lg"></i>'; ?>
</p>
<a href="<?= base_url('/academic/edit/generation/' . $data['id']); ?>" class="btn btn-warning mr-1">Edit</a>
<a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
<?= $this->endSection() ?>
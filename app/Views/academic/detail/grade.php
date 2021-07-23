<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<h1><?= $form; ?></h1>
<p><?= $data['name']; ?></p>
<h2><?= $data['departement_name']; ?></h2>
<p><?= $data['level_name']; ?></p>
<p>"<?= $data['desc']; ?>"</p>
<h2>Kapasitas <?= $data['capacity']; ?> siswa</h2>
<p><i class="fas fa-user-graduate mr-3"></i> Terisi <?= $data['current_capacity']; ?> siswa
</p>
<a href="<?= base_url('/academic/edit/grade/' . $data['id']); ?>" class="btn btn-warning mr-1">Edit</a>
<a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
<?= $this->endSection() ?>
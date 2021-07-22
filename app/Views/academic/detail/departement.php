<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h1><?= $form; ?></h1>
<h2><?= $data['departement_name']; ?></h2>
<h3><?= $data['headmaster_id']; ?>-Dra. Hj. Rossa Rohsunah, M.Pd</h3>
<p>"<?= $data['departement_desc']; ?>"</p>

<a href="<?= base_url('/academic/edit/departement/' . $data['departement_id']); ?>"
    class="btn btn-warning mr-1">Edit</a>
<a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Kembali</a>
<?= $this->endSection() ?>
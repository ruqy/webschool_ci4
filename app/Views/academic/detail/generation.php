<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h1><?= $form; ?></h1>
<h2><?= $data['school_year_name']; ?></h2>
<p>"<?= $data['school_year_desc']; ?>"</p>
<p><i class="fas fa-calendar mr-3"></i><?= date("d-m-Y", strtotime($data['start_date'])); ?>
    sd <?= date("d-m-Y", strtotime($data['end_date'])); ?></p>
<a href="<?= base_url('/academic/edit/' . $data['school_year_id']); ?>" class="btn btn-warning mr-1">Edit</a>
<a href="<?= base_url('/academic'); ?>" class="btn btn-secondary">Batal</a>
<?= $this->endSection() ?>
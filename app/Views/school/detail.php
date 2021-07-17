<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Sekolah</h3>

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
            <img src="<?= $school['logo']; ?>" class="img-fluid" alt="logo sekolah">
            <h1><?= $school['name']; ?></h1>
            <p><?= $school['address']; ?></p>
            <hr>
            <h3><?= $school['phone_number']; ?></h3>
            <h3><?= $school['fax']; ?></h3>
            <hr>
            <h3><?= $school['website']; ?></h3>
            <p><?= $school['email']; ?></p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <p><?= $school['created_at']; ?></p>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<?= $this->endSection() ?>
<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">RINCIAN IDENTITAS SEKOLAH</h3>

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
            <img src="<?= $school['logo']; ?>" alt="logo sekolah" class="img-thumbnail rounded mb-3"
                style="width:100px;height:100px;">
            <h1><?= $school['name']; ?></h1>
            <p><i class="fas fa-school mr-3"></i><?= $school['address']; ?></p>
            <hr>
            <p><i class="fas fa-envelope mr-3"></i><?= $school['email']; ?></p>
            <p><i class="fas fa-globe mr-3"></i><?= $school['website']; ?></p>
            <hr>
            <h2>Nomor Kontak</h2>
            <p><i class="fas fa-phone mr-3"></i><?= $school['phone_number']; ?></p>
            <p><i class="fas fa-fax mr-3"></i><?= $school['fax']; ?></p>
            <hr>
            <h2>Bergabung Pada</h2>
            <p>

                <?= $school['created_at']; ?>
            </p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<?= $this->endSection(); ?>
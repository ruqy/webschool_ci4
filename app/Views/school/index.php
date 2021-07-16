<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DATA SEKOLAH</h3>

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
            <a href="<?= base_url('/school/new'); ?>" class="btn btn-dark mb-3">Tambah Kelas</a>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($school as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $d['name']; ?></td>
                        <td><?= $d['address']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td>
                            <a href="<?= base_url('school/show/' . $d['id']); ?>" class="badge badge-info">Detil</a>
                            <a href="<?= base_url('school/edit/' . $d['id']); ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('school/delete/' . $d['id']); ?>" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Data Sekolah
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<?= $this->endSection(); ?>
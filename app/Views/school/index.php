<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Sekolah</h3>

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
            <a href="/school/add" class="btn btn-dark mb-3">Tambah Data</a>
            <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
            <div class="alert <?= session()->getFlashdata('alert'); ?> alert-dismissible fade show" role="alert">
                Data sekolah berhasil <strong><?= session()->getFlashdata('pesan'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } ?>
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
                        <td><?= $d['name']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['phone_number']; ?></td>
                        <td>
                            <a href="<?= base_url('/school/show/' . $d['id']); ?>"
                                class="btn btn-sm btn-info">detail</a>
                            <a href="<?= base_url('/school/edit/' . $d['id']); ?>"
                                class="btn btn-sm btn-warning">edit</a>
                            <form action="<?= base_url('/school/' . $d['id']); ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('apakah anda yakin?')">hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<?= $this->endSection() ?>
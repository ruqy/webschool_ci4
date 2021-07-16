<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">EDIT IDENTITAS SEKOLAH</h3>

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
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Informasi Umum Sekolah</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?= base_url('/school/update/' . $school['id']); ?>"
                    method="POST">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Nama Sekolah" name="name"
                                    value="<?= $school['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Alamat Sekolah" value="<?= $school['address']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_number" class="col-sm-2 col-form-label">Kontak</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="Nomor Telepon Sekolah" value="<?= $school['phone_number']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Sekolah Aktif" value="<?= $school['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="website" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="website" name="website"
                                    placeholder="Halaman Web Sekolah" value="<?= $school['website']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fax" class="col-sm-2 col-form-label">Fax </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fax" name="fax"
                                    placeholder="Nomor Faximile Sekolah" value="<?= $school['fax']; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="<?= base_url('/school'); ?>"" class=" btn btn-default float-right">Cancel</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->

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
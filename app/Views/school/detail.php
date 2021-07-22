<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<!-- Default box -->
<div class="card card-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <table class="table-borderless table-dark">
        <tr>
            <td rowspan=2 width="60px">
                <img class="img-lg img-circle mx-2 my-2" src="<?= $school['logo']; ?>" alt="Logo Sekolah">
            </td>
            <td class="align-bottom">
                <span class="display-4"><?= $school['school_name']; ?></span>
            </td>
        </tr>
        <tr>
            <td class="align-top" height="40px"><i class="fas fa-school mr-3"></i><?= $school['address']; ?></td>
        </tr>
    </table>
    <div class="card-footer p-0">
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="nav-link">
                    <h4>Kontak</h4>
                </div>
                <div class="nav-link">
                    <i class="fas fa-phone mr-3"></i><?= $school['phone_number']; ?>
                </div>
                <div class="nav-link">
                    <i class="fas fa-fax mr-3"></i><?= $school['fax']; ?>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link">
                    <h4>Website</h4>
                </div>
                <div class="nav-link">
                    <i class="fab fa-chrome mr-3"></i><a
                        href="http://<?= $school['website']; ?>"><?= $school['website']; ?></a>
                </div>
                <div class="nav-link">
                    <i class="fas fa-envelope mr-3"></i><?= $school['email']; ?>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link">
                    <h4>Terdaftar Sejak</h4>
                </div>
                <div class="nav-link">
                    <i class="fas fa-calendar mr-3"></i><?= $school['created_at']; ?>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link">
                    <a href="<?= base_url('/school/edit/' . $school['id']); ?>" class="btn btn-warning">edit</a>
                    <form action="<?= base_url('/school/' . $school['id']); ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('apakah anda yakin?')">hapus</button>
                    </form>
                    <span class="float-right"> <a href="<?= base_url('/school'); ?>"
                            class="btn btn-secondary">kembali</a></span>
                </div>
            </li>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>
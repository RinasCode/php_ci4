<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Tambah Data Komik</h2>

            <form action="/komik/save" method="post" enctype="multipart/form-data"> <!-- Tambahkan enctype -->
                <?= csrf_field(); ?>

                <!-- Input Judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text"
                        class="form-control <?= (session()->get('validation') && session()->get('validation')->hasError('judul')) ? 'is-invalid' : ''; ?>"
                        id="judul"
                        name="judul"
                        placeholder="Masukkan judul"
                        value="<?= old('judul'); ?>"
                        autofocus>
                    <?php if (session()->get('validation') && session()->get('validation')->hasError('judul')) : ?>
                        <div class="invalid-feedback">
                            <?= session()->get('validation')->getError('judul'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Input Penulis -->
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text"
                        class="form-control <?= (session()->get('validation') && session()->get('validation')->hasError('penulis')) ? 'is-invalid' : ''; ?>"
                        id="penulis"
                        name="penulis"
                        placeholder="Masukkan penulis"
                        value="<?= old('penulis'); ?>">
                    <?php if (session()->get('validation') && session()->get('validation')->hasError('penulis')) : ?>
                        <div class="invalid-feedback">
                            <?= session()->get('validation')->getError('penulis'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Input Sampul (ganti jadi file) -->
                <div class="mb-3">
                    <label for="sampul" class="form-label">Sampul</label>
                    <input type="file"
                        class="form-control <?= (session()->get('validation') && session()->get('validation')->hasError('sampul')) ? 'is-invalid' : ''; ?>"
                        id="sampul"
                        name="sampul">
                    <?php if (session()->get('validation') && session()->get('validation')->hasError('sampul')) : ?>
                        <div class="invalid-feedback">
                            <?= session()->get('validation')->getError('sampul'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

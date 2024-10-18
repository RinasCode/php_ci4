<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Ubah Data Komik</h2>

            <form action="/komik/update/<?= $komik['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">

                <!-- Input Judul -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" 
                               class="form-control <?= (session()->get('validation') && session()->get('validation')->hasError('judul')) ? 'is-invalid' : ''; ?>" 
                               id="judul" 
                               name="judul" 
                               placeholder="Masukkan judul" 
                               value="<?= (old('judul') ? old('judul') : $komik['judul']) ?>" 
                               autofocus>
                        <?php if (session()->get('validation') && session()->get('validation')->hasError('judul')) : ?>
                            <div class="invalid-feedback">
                                <?= session()->get('validation')->getError('judul'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Input Penulis -->
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" 
                               class="form-control <?= (session()->get('validation') && session()->get('validation')->hasError('penulis')) ? 'is-invalid' : ''; ?>"  
                               id="penulis" 
                               name="penulis" 
                               placeholder="Masukkan penulis"
                               value="<?= (old('penulis') ? old('penulis') : $komik['penulis']) ?>">
                        <?php if (session()->get('validation') && session()->get('validation')->hasError('penulis')) : ?>
                            <div class="invalid-feedback">
                                <?= session()->get('validation')->getError('penulis'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Input Sampul -->
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" 
                               class="form-control <?= (session()->get('validation') && session()->get('validation')->hasError('sampul')) ? 'is-invalid' : ''; ?>"  
                               id="sampul" 
                               name="sampul" 
                               placeholder="Masukkan sampul"
                               value="<?= (old('sampul') ? old('sampul') : $komik['sampul']) ?>">
                        <?php if (session()->get('validation') && session()->get('validation')->hasError('sampul')) : ?>
                            <div class="invalid-feedback">
                                <?= session()->get('validation')->getError('sampul'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

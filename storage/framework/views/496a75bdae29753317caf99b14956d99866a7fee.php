<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Form Guru</h1>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
    <?php endif; ?>

    <!-- Record DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form Batch</h6>
            </div>
            <div class="card-body">
                <!-- Record batch -->
            <form method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                    <label for="namaGuru">Nama Guru</label>
                    <span type="text" class="form-control"
                    id="namaGuru" name="nama"><?php echo e($guru->nama); ?></span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <span type="text" class="form-control"
                    id="jabatan" name="jabatan"><?php echo e($guru->jabatan); ?></span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Tempat Lahir</label>
                    <span type="text" class="form-control"
                    id="tempat" name="tempat"><?php echo e($guru->tempat); ?></span>
                </div>

                <div class="form-group">
                    <label for="jabatan">Tanggal Lahir</label>
                    <span type="date" class="form-control"
                    id="tglLahir" name="tglLahir"><?php echo e($guru->tglLahir); ?></span>
                </div>

                <div class="form-group">
                    <label for="jabatan">NIPY</label>
                    <span type="number" class="form-control"
                    id="niyp" name="nipy"><?php echo e($guru->nipy); ?></span>
                </div>

                <div class="form-group">
                    <label for="jabatan">No Handphone</label>
                    <span type="number" class="form-control"
                    id="noHp" name="noHp" ><?php echo e($guru->noHp); ?></span>
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <img src="<?php echo e(asset('storage/' .$guru->foto)); ?>" class="img-preview
                        img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 130px;" >
                </div>

                <div class="form-group">
                    <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-primary mr-2">Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webalhudy\resources\views/guru/show.blade.php ENDPATH**/ ?>
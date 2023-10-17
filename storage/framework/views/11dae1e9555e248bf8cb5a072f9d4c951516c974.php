<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

    <!-- Record DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Form Guru</h6>
            </div>
            <div class="card-body">
                <!-- Menmabhakan Data Guru-->
                <form method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="namaGuru">Judul Kegiatan</label>
                        <span type="text" class="form-control" id="namaGuru" name="judul"><?php echo e($galeri->judul); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Keterangan</label>
                        <textarea  class="form-control" name="keterangan" rows="3" readonly><?php echo e($galeri->keterangan); ?></textarea>

                        <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label>Upload Foto</label>
                        <img src="<?php echo e(asset('storage/' .$galeri->foto)); ?>" class="img-preview
                        img-fluid mb-3 col-sm-5 d-block" style="height: 150px; width: 150px;" >
                    </div>

                    <div class="form-group">
                        <a href="<?php echo e(route('kegiatan.index')); ?>" class="btn btn-primary mr-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webalhudy\resources\views/galeri/show.blade.php ENDPATH**/ ?>
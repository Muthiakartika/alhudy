<?php $__env->startSection('content'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

        <?php if($message = Session::get('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php elseif($message = Session::get('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="<?php echo e(route('murid.create')); ?>" class="btn btn-outline-success">Daftar Siswa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        $i = 0;
                                    ?>
                                    <?php $__currentLoopData = $dataMurid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $murid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            <td><?php echo e($murid->nisn); ?></td>
                                            <td><?php echo e($murid->nama); ?></td>
                                            <td><?php echo e($murid->kelas ? $murid->kelas->namaKelas : 'N/A'); ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('murid.show', $murid->id)); ?>"
                                                    title="Tampilkan Data Siswa">
                                                    <i class="fas fa-eye"></i></a>
                                                <a class="btn btn-warning btn-sm" href="<?php echo e(route('murid.edit', $murid->id)); ?>" title="Edit Data Siswa">
                                                    <i class="fas fa-pen"></i></a>
                                                 <!-- Button to trigger the modal -->
                                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?php echo e($murid->id); ?>" title="Hapus Data Siswa">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal<?php echo e($murid->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo e($murid->id); ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel<?php echo e($murid->id); ?>">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data siswa ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <form action="<?php echo e(route('murid.destroy', $murid->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webalhudy\resources\views/murid/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    
    <?php
        $dataGuru = DB::table('gurus')->count();
        $dataMurid = DB::table('murids')->count();
        $dataGaleri = DB::table('galeris')->count();
    ?>
        <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo e(auth()->user()->nama); ?> Dashboard</h1>
                <br>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Healthcares Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Jumlah Guru</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($dataGuru); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-history fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah Siswa</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($dataMurid); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-redo fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Jumlah PPDB</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-check fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Data -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-auto py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Jumlah Kegiatan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($dataGaleri); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-times fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Illustrations -->
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 49rem;"
                                     src="<?php echo e(asset('admin/img/hudy_admin.png')); ?>" alt="Healthcare Admin">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webalhudy\resources\views/admin/index.blade.php ENDPATH**/ ?>
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        
        <div class="sidebar-brand-text mx-2 ">
            <span>mi al-hudy</span>
        </div>
    </a>

    <?php if(auth()->user()->role =='admin'): ?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo e(Request::is('admin-dashboard') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.index')); ?>" class="nav-link ">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item -->
        <li class="nav-item <?php echo e(Request::is('guru') || Request::is('guru/*') ? 'active' : ''); ?>">
            <a class="nav-link "
                href="#">
                <i class="fas fa-users"></i>
                <span>Data PPDB</span></a>
        </li>
        <!-- Nav Item -->
        <li class="nav-item <?php echo e(Request::is('guru') || Request::is('guru/*') ? 'active' : ''); ?>">
            <a class="nav-link "
                href="<?php echo e(route('guru.index')); ?>">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Daftar Guru</span></a>
        </li>
        <!-- Nav Item -->
        <li class="nav-item <?php echo e(Request::is('murid') || Request::is('murid/*') ? 'active' : ''); ?>">
            <a class="nav-link "
                href="<?php echo e(route('murid.index')); ?>">
                <i class="fas fa-user-graduate"></i>
                <span>Daftar Siswa</span></a>
        </li>
        <!-- Nav Item -->
        <li class="nav-item <?php echo e(Request::is('kegiatan') || Request::is('kegiatan/*') ? 'active' : ''); ?>">
            <a class="nav-link "
                href="<?php echo e(route('kegiatan.index')); ?>">
                <i class="fas fa-photo-video"></i>
                <span>Data Kegiatan</span></a>
        </li>

    <?php endif; ?>
<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<?php /**PATH C:\xampp\htdocs\webalhudy\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
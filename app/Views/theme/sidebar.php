<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon">
        <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3"><sup>e</sup>Library</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?=site_url('chart');?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <?php 
            $uri = new \CodeIgniter\HTTP\URI(current_url());
            $segment = $uri->getSegment(2); 
        ?>
        <span>Dashboard</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Setting
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-book"></i>
        <span>Katalog</span>
    </a>
    <div id="collapseTwo" class="collapse <?php if($segment=='buku') echo 'show'?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=site_url('buku')?>">Buku</a>
            <a class="collapse-item" href="<?=site_url('kategori')?>">Kategori</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-chart-bar"></i>
        <span>Chart</span>
    </a>
    <div id="collapseUtilities" class="collapse <?php if($segment=='chart') echo 'show'?>" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=site_url('chart/pie')?>">Pie</a>
            <a class="collapse-item" href="<?=site_url('chart/line')?>">Line</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
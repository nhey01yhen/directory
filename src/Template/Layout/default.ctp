<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  echo $this->Html->meta ( 'favicon.ico', '/img/site-logo.png', array (
      'type' => 'icon'
  ) );
 ?>
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cloudstaff Directory</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template-->

  <?= $this->Html->css('all.min.css') ?>
  <?= $this->Html->css('sb-admin-2.min.css') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <?php
          echo $this->Html->image('site-logo.png',array('alt' => 'more','height'=>'60'));?>
        </div>
        <div class="sidebar-brand-text mx-3">Directory Listing</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-address-book"></i>
          <span>Directory</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Directory:</h6>
            <?= $this->Html->link(__('Client'), ['controller'=>'Dirlist','action' => 'client'],['class'=>'collapse-item']) ?>
            <?= $this->Html->link(__('Hub'), ['controller'=>'Dirlist','action' => 'index'],['class'=>'collapse-item']) ?>
            <?php if($auth){ ?>
              <h6 class="collapse-header">Others:</h6>
              <?= $this->Html->link(__('New Directory'), ['controller'=>'Dirlist','action' => 'add'],['class'=>'collapse-item']) ?>
            <?php } ?>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-phone"></i>
          <span>Dial Pattern</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Dial Pattern:</h6>
            <?= $this->Html->link(__('Open Dial Pattern'), ['controller'=>'Dialpattern','action' => 'index'],['class'=>'collapse-item']) ?>
            <h6 class="collapse-header">Dial Pattern Code:</h6>
            <?= $this->Html->link(__('View Dial Pattern code'), ['controller'=>'Featuredcode','action' => 'index'],['class'=>'collapse-item']) ?>
            <h6 class="collapse-header">Ring & Queue Groups:</h6>
            <?= $this->Html->link(__('View Queue Groups'), ['controller'=>'RingGroup','action' => 'index'],['class'=>'collapse-item']) ?>

          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <?php if($auth){ ?>
        <div class="sidebar-heading">
          ADMIN
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-user"></i>
            <span>User Settings</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Settings:</h6>
              <?= $this->Html->link(__('View All User'), ['controller'=>'Users','action' => 'index'],['class'=>'collapse-item']) ?>
              <?= $this->Html->link(__('Add new User'), ['controller'=>'Users','action' => 'signup'],['class'=>'collapse-item']) ?>
            </div>
          </div>
        </li>
      <?php } ?>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <?php if($auth){ ?>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucwords($auth['User']['username']); ?></span>
                  <img class="img-profile rounded-circle" src="https://images.cloudstaff.com/getimage/<?php echo $auth['User']['username']; ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <?= $this->Html->link(
                      '<span class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></span> Profile<span class="sr-only">' . __('Edit') . '</span>',
                      ['controller'=>'Users','action' => 'edit', $auth['User']['id']],
                      ['escape' => false, 'class'=>'dropdown-item', 'title' => __('Edit')]
                  ) ?>
                  <div class="dropdown-divider"></div>
                    <?= $this->Html->link(
                        '<span class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></span> Logout<span class="sr-only">' . __('Logout') . '</span>',
                        ['controller'=>'Users','action' => 'logout'],
                        ['escape' => false, 'class'=>'dropdown-item', 'title' => __('Logout')]
                    ) ?>
                </div>
              </li>
          <?php }else{ ?>
            <li class="nav-item dropdown no-arrow">
                <?= $this->Html->link(
                    '<span class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></span> Sign In<span class="sr-only">' . __('Login') . '</span>',
                    ['controller'=>'Users','action' => 'login'],
                    ['escape' => false, 'class'=>'nav-link dropdown-toggle', 'title' => __('Login')]
                ) ?>
            </li>

          <?php } ?>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">
          <div class="col-md-12">
          <?= $this->Flash->render() ?>


            <?= $this->fetch('content') ?>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; <?php echo date('Y');?> Dial Pattern - Version 1.0</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <?= $this->Html->script('jquery.min.js') ?>
  <?= $this->Html->script('bootstrap.bundle.min.js') ?>
  <?= $this->Html->script('jquery.easing.min.js') ?>
  <?= $this->Html->script('sb-admin-2.min.js') ?>
  <?= $this->Html->script('Chart.min.js') ?>
  <?= $this->Html->script('chart-area-demo.js') ?>
  <?= $this->Html->script('chart-pie-demo.js') ?>
</body>

</html>

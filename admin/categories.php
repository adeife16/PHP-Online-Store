<?php
require_once 'includes/categories.inc.php';
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 	<title>Categories</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.css" rel="stylesheet">
 </head>
<body id="page-top">

 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a style="background-color: #FFF;" class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon">
          <img src="images/trendy.png">
        </div>
<!--         <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <<li class="nav-item">
        <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="products.php">Add Products</a>
            <a class="collapse-item" href="prolist.php">Product List</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="categories.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Categories</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="orders.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Orders</span></a>
      </li>
     <hr class="sidebar-divider">
      <li class="nav-item">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Users</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="mod.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Moderators</span>
        </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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


          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong><?php echo $_SESSION['username']; ?></strong></span>
                <img src="<?php echo $session_image; ?>" class="img-profile rounded-circle" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="editprofile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product List</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <div class="catform">
          	<h4>Add Category</h4>
<hr>
			 <div class="errors">
          	<?php if (isset($errors)) {

          		if (count($errors) > 0) {
          		?>
          	<label class="alert alert-danger">
          	<?php foreach ($errors as $error) {
          			echo $error;
          		}?>
          </label>
          <?php	} }?>
          </div>
           <div class="success">
          	<?php if (isset($success)) {

          		if (count($success) > 0) {
          		?>
          	<label class="alert alert-success">
          	<?php foreach ($success as $succ) {
          			echo $succ;
          		}?>
          </label>
          <?php	} }?>
          </div>
          <?php if ($view == 1){?>
          <?php while ($row = mysqli_fetch_assoc($getcat)) {
          ?>
			<form class="form" method="post" action="">
				<div class="form-group">
				<label>Category Name : </label>
				<input type="text" name="catName" class="form-control" value="<?php if (isset($row['cat_name'])) { echo $row['cat_name'];} ?>">
			</div>
			<div class="form-group">
          <input type="submit" name="update" class="btn btn-primary" value="Update">
			</div>
    </form>
  <?php }?>
    <?php }
      else {?>
        <form class="form" method="post" action="">
          <div class="form-group">
          <label>Category Name : </label>
          <input type="text" name="catName" class="form-control" value="<?php if (isset($row['cat_name'])) { echo $row['cat_name'];} ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="save" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
<hr>
          </div>

          <table id="catList" class="table table-striped">

          		<thead>
          			<tr>
          				<td>Category Name</td>
                  <td>Actions</td>
          			</tr>
          		</thead>
              <tbody>
              		<?php foreach ($data as $key) { ?>
                      <tr>
                        <td><?php echo $key['cat_name']; ?></td>
                        <td><button type="button" class="btn btn-warning" name="button"> <a href="categories.php?edit=<?php echo $key['cat_id'];?>"><i class="fa fa-pen white"></i></a> </button> <button class="btn btn-danger" name="button"> <a href="#" data-toggle="modal" data-target="#catdel"><i class="fa fa-trash white"></i> </a> </button></td>
                      </tr>


                    <?php  }?>
              </tbody>

          </table>

          <script type="text/javascript">

  $(document).ready(function() {

      $('#catList').DataTable();
    });

  </script>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
  <div class="modal fade" id="catdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Category Removal</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: red;">Category cannot be recovered once deleted. Do you really want to delete?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="categories.php?del=<?php echo $key['cat_id']; ?>">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Category Removal</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: red;">Category cannot be recovered once deleted. Do you really want to delete?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="categories.php?delete=<?php echo $key['cat_id']; ?>" value="<?php echo $key['cat_id']; ?>">Delete</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables Scripts -->

  <script src="assets/vendor/jquery/jquery.js"></script>
 <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

 </body>
 </html>

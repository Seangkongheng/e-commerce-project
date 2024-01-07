

<style>
    .navbar-nav{
        background-color: #0F6900;
    }
    .sidebar-brand-text img{
        width: 80px;
        height: 80px;
        margin-top: 50px;
    }
</style>

<!-- Sidebar -->
 <ul class="navbar-nav bg- sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
         <div class="sidebar-brand-text mx-3"> <img  src="image/Khmer-removebg-preview" alt=""> KCTT</div>
    </div>
   
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0 mt-5">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="register.php">Admin</a>
            <a class="collapse-item" href="product.php">product</a>
            <!-- <a class="collapse-item" href="product_size">product_size</a> -->
            <a class="collapse-item" href="catagory.php">catagroy</a>
            <a class="collapse-item" href="customer.php">customer</a>
            <a class="collapse-item" href="order.php">order</a>
            <a class="collapse-item" href="order.php">System Setting</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<!--<li class="nav-item">
    <a class="nav-link collapsed" href="register.php" data-bs-toggle="collapse" data-bs-target="#Admin"
        aria-expanded="true" aria-controls="collapseUtilities">
     <a href="catagory.php"> <span class="text-uppercase text-white text-center"> catagory </span></a>   
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="register.php" data-bs-toggle="collapse" data-bs-target="#Admin"
        aria-expanded="true" aria-controls="collapseUtilities">
     <a href="customer.php"> <span class="text-uppercase text-white text-center"> customer </span></a>   
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="register.php" data-bs-toggle="collapse" data-bs-target="#Admin"
        aria-expanded="true" aria-controls="collapseUtilities">
     <a href="customer.php"> <span class="text-uppercase text-white text-center">Order</span></a>   
    </a>
</li>-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="nanbarItem.php">Nabar Item</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="register.php">Forgot Password</a>
            <a class="collapse-item" href="loginForm.php">Logout</a>
            
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ReportcollapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Report</span>
    </a>
    <div id="ReportcollapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Report</h6>
            <a class="collapse-item" href="Report.php">Order Report</a>
            <a class="collapse-item" href="customerReport.php">cutomer Report</a>
            <a class="collapse-item" href="ReportProduct.php">product Report</a>
         
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->

</ul>
<!-- End of Sidebar -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="loginForm.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

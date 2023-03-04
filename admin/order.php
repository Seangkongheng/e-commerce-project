<?php 
session_start();
include('include/header.php');
include('include/navbar.php');



?>



<div class="modal fade" id="Admin" tabindex="-1" aria-bs-labelledby="exampleModalLabel" aria-bs-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <form action="code.php" method="POST">
                <div class="modal-body">
                  <div class="form-group">
                      <label> Fist name </label>
                      <input type="text" name="fistName" class="form-control" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                      <label>last name</label>
                      <input type="text" name="lastName" class="form-control checking_email" placeholder="Enter Email">
                      <small class="error_email" style="color: red;"></small>
                  </div>
                  <div class="form-group">
                      <label>admin username</label>
                      <input type="text" name="username" class="form-control" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                      <label>password</label>
                      <input type="password" name="password" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                      <label>confirm password</label>
                      <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                      <label>email</label>
                      <input type="Email" name="email" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" name="registerbtn"class="btn btn-primary">Save changes</button>
                   </div>
              </div>
                    
                </form>
      </div>
    </div>
  </div>
</div>





<div class="container-fluid">
          <!-- Content Wrapper -->


<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                alt="...">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...</div>
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        

                
                </span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#loginForm.php" data-bs-toggle="modal" data-bs-target="#logoutModal">
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
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    <div class="card shadow mb-5">
        <div class="card-header py-3">
        <?php
            //coneect mysql
            $connect=new Mysqli('localhost','root','','db_ss1');
            $query ="select * from tbl_order";
            $result = Mysqli_query($connect,$query);
          ?>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Admin">
       Order Form
        </button>
        </div>
        <div class="card-body">
        <table class="table table-hover" id="datatableOrder">
        <thead>
            <tr>
            <th>Order Date</th>
                <th>ID</th>
                <th>CusID</th>
                <th>ProID</th>
                <th>PName</th>
                <th>Price</th>
                <th>quantity</th>
                <th>Gmail</th>
                <th>Adress1</th>
                <th>Adress2</th>
                <th>Phone</th>
                <th>city</th>
                <th>stat</th>
                <th>country</th>
                <th>code</th>
                <th>status</th>
            </tr>
        </thead>
        <?php
             if(mysqli_num_rows($result) > 0)
             {
               while($row=mysqli_fetch_assoc($result))
               {
                ?> 
                 <tr>
                 <td><?php  echo $row["Orderdate"]; ?>  </td>
                 <td><?php  echo $row["order_id"]; ?>  </td>
                 <td><?php  echo $row["userID"]; ?>  </td>
                
                 <td><?php  echo $row["product_ID"]; ?>  </td>
                 <td><?php  echo $row["productName"]; ?>  </td>
                 <td><?php  echo $row["product_price"]; ?>  </td>
                 <td><?php  echo $row["qty"]; ?>  </td>
                 <td><?php  echo $row["email"]; ?>  </td>
                 <td><?php  echo $row["Adress1"]; ?>  </td>
                 <td><?php  echo $row["Address2"]; ?>  </td>
                 <td><?php  echo $row["PhoneNumber"]; ?>  </td>
                 <td><?php  echo $row["city"]; ?>  </td>
                 <td><?php  echo $row["state"]; ?>  </td>
                 <td><?php  echo $row["country"]; ?>  </td>
                 <td><?php  echo $row["PinkCode"]; ?>  </td>
                 
                 
                 <?php
                 
                 ?>
                <!-- <form action="" method="POST">
                   <input type="hidden" name="edit_id" value="">
                    <button type="submit" name ="btneditCatagory" class="btn btn-primary text-uppercase"> Edit</button>
                 </form>-->
                 
             
             <td>
                 <form action="code.php" method="post">
                 <input type="hidden" name="deleteIDcatagory" value=" ">
                 <button type="sumit" name="btndeleteCatagory"class="btn btn-danger text-uppercase"> delet</button>
                 </form>
             </td>
           </tr>
          
           <?php
           }
         }
         else
         {
           echo "no recode found";
         }
         ?>


        </table>
  
        </div>
<?php
include('include/script.php');
include('include/footer.php');
?>



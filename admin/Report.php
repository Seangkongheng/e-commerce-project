<?php 
session_start();
include('include/header.php');
include('include/navbar.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="print.css" media="print">

<div class="container-fluid">
          <!-- Content Wrapper -->
<!--invoice-->

<div class="modal fade" id="Admin" tabindex="-1" aria-bs-labelledby="exampleModalLabel" aria-bs-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">your in voice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="allReport">
            <button class="btn btn-primary" id="print-btn" onclick="window.print();"> <i class="fa-solid fa-print"></i> Print</button>
            <button class="btn btn-warning"><i class="fa-solid fa-file-export"></i>Export</button>
            <button class="btn btn-info"><i class="fa-solid fa-floppy-disk"></i>Save</button>
           </div>
           <p class="border-top mt-4  "></p>
           <div class=" float-end"><p>Apolo/shop Cambodai</p></div>
      <h1 class="mt-5 ">INVOICE</h1>
      <p class="fw-bold">#invoice:</p>
      <p class="fw-bold">#Date:</p>
      <p class="fw-bold">#payment date:</p>

      <?php
            //coneect mysql
            $connect=new Mysqli('localhost','root','','db_ss1');
            $query ="select * from tbl_order where order_id =''";
            $result = Mysqli_query($connect,$query);
            
          ?>



      
      </div>
    </div>
  </div>
</div>



<!--end invoice-->

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
        <div class="card-header ">

        <h1>Order Report</h1>
        <div class="report d-flex justify-content-between">
           <div class="allReport">
            <button class="btn btn-primary" id="print-btn" onclick="window.print();"> <i class="fa-solid fa-print"></i> Print</button>
            <button class="btn btn-warning"><i class="fa-solid fa-file-export"></i>Export</button>
            <button class="btn btn-info"><i class="fa-solid fa-floppy-disk"></i>Save</button>
            <p class="mt-2">Date Rank</p> 
           </div>
          
                <form action="Report.php" method="POST">
               <div class="filter_date d-flex">
                    <label for="date" class=" col-form-label">From</label>
                     <div class="form-group">
               
                      <input type="date" name="from_date" class="form-control" id="">
                    </div>
                <label for="date" class="  col-form-label">To</label>
                <div class="form-group">
        
                  <input type="date" name="To_date" class="form-control" id="">
                 
                </div>
                <div class="buton">
                <input type="submit" name ="submit_Date" class="btn btn-primary"value="filter">
                </div>
               </div>
             </form>
  
        </div>
       <?php
        if(isset($_POST['submit_Date'])){
            $formdate=$_POST['from_date'];
            $todate=$_POST['To_date'];
            $query ="SELECT * from tbl_order where Orderdate BETWEEN '$formdate' and '$todate'";
            $result = Mysqli_query($connect,$query);
            if(mysqli_num_rows($result)>0){?>
                

                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <th>Invoice</th>
                            <th>ID</th>
                            <th>Order Date</th>
                            <th>cutomer Name</th>
                            <th>phonee</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>delete</th>
                        </thead>
                        <tbody>
                    <?php foreach($result as $value){?>
                            <tr>
                            <td><?=$value['order_id'] ?>  </td>
                            <td><?=$value['invoice'] ?>  </td>
                            <td><?=$value['Orderdate'] ?>  </td>
                            <td><?=$value['costomerName'] ?>  </td>
                            <td><?=$value['PhoneNumber'] ?>  </td>
                            <td><?=$value['email'] ?>  </td>
                            <td><?=$value['Adress1'] ?>  </td>
                            <td>pending </td>
                 
                        <td> 
                         <a href="invoiceReport.php?idorder=<?=$value['order_id'] ?>">view</a>
                            </td>
                            <td>
                  <form action="code.php" method="post">
                  <input type="hidden" name="deleteIDOrder" value="<?=$value['order_id']?>">
                  <button type="sumit" name="btndeleteOrder"class="btn btn-danger text-uppercase"> delete</button>
                  </form>
              </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

              <?php  
            }

        }
        else
        {
           
       ?>
             
        <div class="card-body">
        <?php
            //coneect mysql
            $connect=new Mysqli('localhost','root','','db_ss1');
            $query ="select * from tbl_order";
            $result = Mysqli_query($connect,$query);
          ?>
            <table class="table table-bordered" id="datatableOrderReport" width="100%" cellspacing="0">
              <thead>
                <th>Invoice</th>
                <th>ID</th>
                <th>Order Date</th>
                <th>cutomer Name</th>
                <th>phonee</th>
                <th>Email</th>
                <th>Address</th>
                <th>Status</th>
                <th>View</th>
                <th>delete</th>
                </tr>
              </thead>
              <tbody >
                   
                     <?php
              if(mysqli_num_rows($result) > 0)
              {
                while($row=mysqli_fetch_assoc($result))
                {
                 ?> 
                  <tr>
                  <td><?php  echo $row["invoice"]; ?>  </td>
                  <td><?php  echo $row["order_id"]; ?>  </td>
                  <td><?php  echo $row["Orderdate"]; ?> </td>
                  <td><?php  echo $row["costomerName"];?> </td>
                  <td><?php  echo $row["PhoneNumber"];?> </td>
                  <td><?php  echo $row["email"];?> </td>
                  <td><?php  echo $row["Adress1"];?> </td>
                  <td>pending </td>
                  <td> 
                    <a href="invoiceReport.php?idorder=<?php  echo $row["order_id"];  ?>">view</a>
                    </td>
                  
                
                  <?php
                  
                  ?>
                  
                  
              
              <td>
                  <form action="code.php" method="post">
                  <input type="hidden" name="deleteIDOrder" value="<?php  echo $row["order_id"];  ?>">
                  <button type="sumit" name="btndeleteOrder"class="btn btn-danger text-uppercase"> delete</button>
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
              </tbody>

            </table>

        
            
          </div>
        </div>
        
    </div>
    <?php }?>
</div>
  </div>
  
  
</div>
<?php
include('include/script.php');
include('include/footer.php');
?>



<?php 
session_start();
include('include/header.php');
include('include/navbar.php');


$order=$_GET['idorder'];


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <!--message--->
 
        </div>

                            <div class="card-body container">
                                        
                                <div class="allReport">
                                <button class="btn btn-primary"  onclick="window.print();"> <i class="fa-solid fa-print"></i> Print</button>
                                <button class="btn btn-warning"><i class="fa-solid fa-file-export"></i>Export</button>
                                <button class="btn btn-info"><i class="fa-solid fa-floppy-disk"></i>Save</button>
                            </div>
                            <style>
                                @media print{
                                     body *{
                                        visibility:hidden;
                                                                            }
                                        .table_invoice *{
                                            visibility:visible;
                                        }
                                        .table_invoice {
                                            position:absolute;
                                            left:-150px;
                                            right:0px
                                            top:-500px


                                        }
                                        .form-control{
                                            display:none;
                                        }
                                        .btn{
                                            display:none;
                                        }
                                       
                                    }
                            </style>
                            
                            
                            <p class="border-top mt-4  "></p>
                            <div class="table_invoice container" >

                            
                            <?php
                                //coneect mysql
                                $connect=new Mysqli('localhost','root','','db_ss1');
                                $query ="select * from tbl_order where order_id='$order'";
                                $result = Mysqli_query($connect,$query);
                                
                            ?>
                             <form class="border p-5"action="" method="post">
                             <table class="table mt-5">
                                        <thead>
                                        <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">price</th>
                                        <th scope="col">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                if(mysqli_num_rows($result) > 0)
                                {
                                   
                                while($row=mysqli_fetch_assoc($result))
                                { 
                                    
                                    ?> 
                                    <div class="float-end text-danger"><p>Apolo/shop Cambodai</p></div>
                                    <h1 class="mt-2">APOLO</h1>
                                    <h1 class="mt-5 float-end fw-bold text-danger">INVOICE</h1>
                                    <p class="fw-bold mt-5">#invoice: <?php  echo $row["invoice"]; ?>  </p>
                                    <p class="fw-bold">#Date order: <?php  echo $row["Orderdate"]; ?> </p>
                                    <?php
           $today = date("F j, Y"); 
           //echo $today;?>
                                    <p class="fw-bold">#payment date: <?php  echo $today ?> </p>
                                    <tr>
                                    <td><?php  echo $row["productName"]; ?>  </td>
                                    <td><?php  echo $row["qty"]; ?>  </td>
                                    <td><?php  echo $row["product_price"]; ?>  </td>
                                    
                                   
                                   
                                    <?php
                                    $total_price=0;
                                    $subtotal=0;
                                    $index = 0;
                                    $discounted_price=0;
                                    $orignal=$row['product_price'];
                                    
                                    $total_price= $row['product_price'] *  $row["qty"];
                           
                                    $subtotal+=$row['product_price'];
                                  //  discounted_price = original_price - (original_price * discount / 100)
                                   
                       
                                 
           
                                   
                                    ?>
                                    <td><?php  echo $total_price ?>  </td>
                                    <!-- <form action="" method="POST">
                                    <input type="hidden" name="edit_id" value="">
                                        <button type="submit" name ="btneditCatagory" class="btn btn-primary text-uppercase"> Edit</button>
                                    </form>-->
                                    
                                
                            </tr>
                            
                            <?php
                            }
                            }
                            else
                            {
                            echo "no recode found";
                            }
                            
                            ?>
                          
                            <tr>
                 <form action="invoiceReport.php" method="POST">
						<td colspan="3" align="right"><b>Total</b></td>
                 
                                    <td class="text-danger"><b><?php echo number_format($total_price); ?>$</b></td>
                                    
                                </tr>
                                        
                               
                                <td colspan="3" align="right"><b>Discount :</b></td>
                    
                            <td class="text-danger"><b> <input class="form-control" type="number" name="discount" id=""></b></td>
                                   
            
          </form>
          <?php
            if(isset($_POST['caculate']))
            {
                    

                $discount=$_POST['discount'];
                $pric=$total_price;
                $discounted_price=0;
                $orignal_price= $orignal;
                
               $discounted_price = $total_price*($discount / 100) ;
                // $discounted_price = $orignal_price-($orignal_price*$discount / 100) ;
                   
              
            }
            else
            {
                $discount=0;
            }
          ?>  
        
          
                   
                <td><?php echo number_format($discount);?>%</td><br>
                </tr>
              
            <td colspan="3" align="right"><b>SubTotal :</b></td><br>
            <td class="text-danger"><b><?php 
            if($discounted_price==0){
           echo number_format($total_price);
            }
            else
            {
                echo number_format($discounted_price);
            }
            ?>$</b>
        </td>
               <td>  <button type="submit" class="btn btn-warning" name="caculate"> save</button></td>
              
                    </tbody>
                    </table>

                   
                    <div class="border-bottom border-dark border-5 mt-5">

                        </div>
                       <div class="footer d-flex justify-content-between">
                       <div class="logo​​ d-flex justify-content-between">
                       <h1 class="mt-5 text-danger">APOLO </h1>
                       
                       </div>
                       <p class=" sign float-end mt-5 text-uppercase">Sign and name</p>
                       
                       </div>
                       <style>
                        .sign{
                            margin-right:100px
                        }
                       </style>
                       <p class="mt-5"><small>Cambodia| ecommerce| online | 2023</small></p>

                    </form>
                    </div>

                    
<!--message--->



<?php
include('include/script.php');
include('include/footer.php');
?>

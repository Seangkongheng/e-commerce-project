<?php 
session_start();
include('include/header.php');
include('include/navbar.php');



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

        <h1>product Report</h1>
        
        <div class="report mt-5 d-flex justify-content-between">
           <div class="allReport">
           <button class="btn btn-primary"  onclick="window.print();"> <i class="fa-solid fa-print"></i> Print</button>
            <button class="btn btn-warning"><i class="fa-solid fa-file-export"></i>Export</button>
            <button class="btn btn-info"><i class="fa-solid fa-floppy-disk"></i>Save</button>
           </div>
           
           <div class="dataserch d-flex justify-content-between">

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
                <input type="submit" name ="submit_Date_product" class="btn btn-primary"value="Seach">
                </div>
               </div>
             </form>
             <style>
                                @media print{
                                     body *{
                                        visibility:hidden;
                                                                            }
                                        .invoice  *{
                                            visibility:visible;
                                        }
                                        .invoice {
                                            position:absolute;
                                            left:-250px;
                                            right:0px
                                            top:-1000px


                                        }
                                    }
                            </style>

             <!--filter day-->



            
             <?php
             if(isset($_POST['submit_Date_product'])){
                $formdate=$_POST['from_date'];
                $todate=$_POST['To_date'];
                $query ="SELECT * from tbl_product where addtime BETWEEN '$formdate' and '$todate'";
                $result = Mysqli_query($connect,$query);
                if(mysqli_num_rows($result)>0){?>
                    <div class="col-lg-12 ">
                        <div class="printtable">

                        
                    <table class="table table-bordered display "id="datatableIDProduct" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col" class="">Create Date</th>
                            <th scope="col" class="">ID</th>
                            <th scope="col" class="">productName</th>
                            <th scope="col" class="">catagory</th>
                            <th scope="col" class="">price</th>
                            <th scope="col" class="">Product img</th>
                            <th scope="col" class="">product imag1</th>
                            <th scope="col" class="">Product img2</th>
                            <th scope="col" class="">Product img3</th>
                            <th scope="col" class="">Product img4</th>
                            <th scope="col" class="">dectiption</th>
                            <th scope="col" class="">edit</th>
                            <th scope="col" class="">delete</th>
                            </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach($result as $value){?>
                        <tr>
                        <td><?=$value['addtime'] ?>  </td>
                        <td><?=$value['product_id'] ?>  </td>
                        <td><?=$value['product_name'] ?>  </td>
                        <td><?=$value['category_name'] ?>  </td>
                        <td><?=$value['price'] ?>  </td>
                        <td>
                         <img src="<?="upload/" .$value['image_product']?>"width ="50px" height="50px"alt="">
                         </td>
                         <td>
                         <img src="<?="upload/" .$value['image_product1']?>"width ="50px" height="50px"alt="">
                         </td>
                         <td>
                         <img src="<?="upload/" .$value['image_product2']?>"width ="50px" height="50px"alt="">
                         </td>
                         <td>
                         <img src="<?="upload/" .$value['image_product3']?>"width ="50px" height="50px"alt="">
                         </td>
                         <td>
                         <img src="<?="upload/" .$value['image_product4']?>"width ="50px" height="50px"alt="">
                         </td>
                        <td>
                             <form action="productEdit.php" method="POST">
                            <input type="hidden" name="catagoryID_id" value=" <?=$value['category_id'] ?>">
                           <input type="hidden" name="prodcutedit" value="<?=$value['category_id'] ?>?>  ">
                             <button type="submit" name ="btneditpoduct" class="btn btn-primary text-uppercase"> Edit</button>
                            </form> 
                        </td>
                        <td>
                        <form action="code.php" method="post">
                  <input type="hidden" name="deleteproduct" value=" <?=$value['category_id'] ?>">
                  <button type="sumit" name="btndeleteproduct"class="btn btn-danger text-uppercase"> delet</button>
                  </form>
                        </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    </div>
                 </div>
                 <?php  
                }
             }
             else{
  
             ?>
         
           </div>

        </div>
        </div>

        <div class="card-body">
        <?php
           $today = date("F j, Y"); 
           //echo $today;?>
        <div class="invoice">
        <div class="date">
        <h1 class="float-end text-danger border-bottom ">
            APOLO</h1>
        <h1 class="text-uppercase" >Product Report</h1>
        <p class="mt-5">APOLO/SHOPING CAMBODAI</p>
      <p class="fw-bold">For date  : <?php echo $today?></p>
        <p class="fw-bold">Address : Phnome penh</p>
        <p class="fw-bold">Addmin : </p>
      </div>
        <?php
            //coneect mysql
            $connect=new Mysqli('localhost','root','','db_ss1');
            $query ="SELECT p.addtime, p.product_id,p.product_name,c.category_id, c.category_name, p.product_id,p.price,p.image_product,p.image_product1,p.image_product2,p.image_product3,p.image_product4,p.decription
            FROM tbl_product p
            INNER JOIN tbl_category c 
                  ON p.productcatagory = c.category_id;";
            $result = Mysqli_query($connect,$query);
          ?>
        <table class="table table-bordered display "id="datatableIDProduct" width="100%" cellspacing="0">
        <thead>
                <tr>
                <th scope="col" class="">Create Date</th>
                <th scope="col" class="">ID</th>
                <th scope="col" class="">productName</th>
                <th scope="col" class="">catagory</th>
                <th scope="col" class="">price</th>
                <th scope="col" class="">Product img</th>
                <th scope="col" class="">product imag1</th>
                <th scope="col" class="">Product img2</th>
                <th scope="col" class="">Product img3</th>
                <th scope="col" class="">Product img4</th>
                <th scope="col" class="">dectiption</th>
                </tr>
        </thead>
        <tbody>
        <?php
              if(mysqli_num_rows($result) > 0)
              {
                while($row=mysqli_fetch_assoc($result))
                {
                 ?> 
                  <tr>
                  <td><?php  echo($row["addtime"]); ?>  </td>
                  <td><?php  echo $row["product_id"]; ?>  </td>
                  <td><?php  echo $row["product_name"]; ?> </td>
                  <td><?php  echo $row["category_name"]; ?> </td>
                  <td><?php  echo $row["price"]; ?> </td>
                  <td>
                 <img src="<?php echo "upload/" .$row['image_product'];?>"width ="50px" height="50px"alt="">
                </td>
                <td> 
                    <img src="<?php echo "upload/" .$row['image_product1'];?>"width ="50px" height="50px"alt="">
                </td>
                <td> 
                    <img src="<?php echo "upload/" .$row['image_product2'];?>"width ="50px" height="50px"alt="">
                </td>
                <td> 
                    <img src="<?php echo "upload/" .$row['image_product3'];?>"width ="50px" height="50px"alt="">
                </td>
                <td> 
                    <img src="<?php echo "upload/" .$row['image_product4'];?>"width ="50px" height="50px"alt="">
                </td>
                <td><?php  echo $row["decription"]; ?> </td>
                  
                  <?php
                 
                  ?>
               
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
</div>
<?php }?>
  </div>
</div>
</div>
</div>
<?php
include('include/script.php');
include('include/footer.php');
?>



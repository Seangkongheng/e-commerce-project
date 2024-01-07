<?php 
session_start();
include('include/header.php');
include('include/navbar.php');




?>


<div class="modal fade " id="Admin" tabindex="-1" aria-bs-labelledby="exampleModalLabel" aria-bs-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              

                <form class="w-100" action="code.php" method="POST" enctype='multipart/form-data'>
                <div class="modal-body">
            
                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">product Name</label>
                         </div>
                       <div class="col-8">
                         <input type="text"  required name="txt_productName" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>

                    
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">catagory</label>
                         </div>
                       <div class="col-8">
                       <select class="form-select form-select-lg mb-3"  required name="select_catagory"aria-label=".form-select-lg example">
                                <option selected>catagory</option>
                                <?php
                                    $connect=new Mysqli('localhost','root','','db_ss1');
                                    $sql="SELECT * from tbl_category";
                                    $rusual=mysqli_query($connect,$sql);
                                    while($row =mysqli_fetch_assoc($rusual)){
                                        $category_name=$row['category_name'] ; 
                                        $category_id=$row['category_id'] ;
                                        echo "<option value='$category_id'>$category_name</option>";
                                    }
                                ?>
                        </select>
                        </div>
                    </div>
                    
                  <!--price-->
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6"   class="col-form-label">price</label>
                         </div>
                       <div class="col-8">
                         <input type="text" required name="txt_price"id="inputPassword6" class="form-control w-50" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <!--description-->
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">decription</label>
                         </div>
                       <div class="col-8">
                        <textarea class="form-control" required name="txt_description" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    


                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="" class="col-form-label">product img</label>
                         </div>
                       <div class="col-8">
                          
                                <input  class="form-control"  required   name="image" type="file" id="formFile">
                           
                        </div>
                    </div>
                      
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">product img1 </label>
                         </div>
                       <div class="col-8">
                       <input class="form-control"  name="image1" type="file" id="formFile">
                        </div>
                    </div>
                   
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label"  name="txt_img2">product img2</label>
                         </div>
                       <div class="col-8">
                       <input class="form-control"  name="image2"  type="file" id="formFile">
                        </div>
                    </div> 
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6"  class="col-form-label">product img3</label>
                         </div>
                       <div class="col-8">
                       <input class="form-control" name="image3" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label" >product img4</label>
                         </div>
                       <div class="col-8">
                       <input class="form-control"  name="image4" type="file" id="formFile">
                        </div>
                    </div>
                                     <!--price
                     <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">stock</label>
                         </div>
                       <div class="col-8">
                         <input type="text" name="txt_Stock"  required id="inputPassword6" class="form-control w-50">
                        </div>
                    </div>-->
               



                  <div class="modal-footer mt-5">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" name="insertProdcut"class="btn btn-warning">Save changes</button>
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

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Admin">
        add product
        </button>
        <!--serch-->
      
        </div> 
    
        <div class="card-body">

        <?php
            //coneect mysql
            $connect=new Mysqli('localhost','root','','db_ss1');
            $query ="SELECT p.addtime,p.product_id,p.product_name,c.category_id, c.category_name, p.product_id,p.price,p.image_product,p.image_product1,p.image_product2,p.image_product3,p.image_product4,p.decription
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
                <th scope="col" class="">edit</th>
                <th scope="col" class="">delete</th>
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
                 <!-- <img src="<?php echo "upload/" .$row['image_product'];?>"width ="50px" height="50px"alt="">
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
                  <td> -->


                  <?php
                 
                  ?>
                 <form action="productEdit.php" method="POST">
                    <input type="hidden" name="catagoryID_id" value=" <?php echo $row["category_id"]; ?>">
                    <input type="hidden" name="prodcutedit" value="<?php  echo $row['product_id'];?>  ">
                     <button type="submit" id="'.$row['category_id'].'" name ="btneditpoduct" class="btn btn-primary text-uppercase"> Edit</button>
                  </form>
              </td>
              <td>
                  <form action="code.php" method="post">
                  <input type="hidden" name="deleteproduct" value="<?php echo $row['product_id']; ?>">
                  <button type="sumit" name="btndeleteproduct"class="btn btn-danger text-uppercase"> delet</button>
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
<!--message--->

<!--message--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<?php
include('include/script.php');
include('include/footer.php');
?>


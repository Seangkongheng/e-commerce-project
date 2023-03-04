<?php
session_start();
$connect=new Mysqli('localhost','root','','db_ss1');
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commer Website</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cart.css">
    <!--Fontsomeone-->
    <script src="https://kit.fontawesome.com/440cfc8658.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <!---Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top ">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between order-lg-0 " href="indeex2.php"> 
                <!--<img src="imag/brand.png" alt="site icon">-->
                    <span class="text-uppercase fw-lighter ms-2">APOLO</span>
            </a>
            <div class="order-lg-2 nav-btns ">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"><?php echo count($_SESSION['cart']); ?></span>

                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"> 3 </span>

                </button>
                <button type="button" class="btn position-relative">
                    <div class="icon">
                        <input type="search" name="" id=""placeholder="search..">
                        <a href="">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i> 
                        </a>
                      </div>
            </div>
            <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#NavMenu">
                <span class="navbar-toggler-icon"> </span>      
            </button>
            <div class="collapse navbar-collapse order-lg-1" id="NavMenu">

               


                <ul class="navbar-nav mx-auto text-center ">
                    <li class="nav-item px-2 py-2">
                        <a href="#" class="nav-link text-uppercase text-dark" > home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#collection" class="nav-link text-uppercase text-dark">collection</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#special" class="nav-link text-uppercase text-dark">specail</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#blogs" class="nav-link text-uppercase text-dark">blogs</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#about" class="nav-link text-uppercase text-dark">about us</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a href="#popular" class="nav-link text-uppercase text-dark">Popurlar</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


<div class="veiwcArd container">

<h3 class="text-center text-uppercase">Your Product</h3>
<p class="text-center text-secondary ">your product order <?php echo count($_SESSION['cart']); ?> product</p>
<div class="row justify-content-around">
<div class="col-sm-12 col-md-6 col-lg-9 ">

<table class="table boder">
  <?php


      $userName=$_SESSION['user'];
      $result = ("SELECT * from user_registration where username  ='$userName'"); 
      $get_result=mysqli_query($connect,$result);
      $row_fecth=mysqli_fetch_assoc($get_result);
      $userID=$row_fecth['user_reg_id'];
   
  ?>
  <thead>


    <tr>
      <th scope="col">product Name</th>
      <th scope="col">Qty</th>
      <th scope="col">total price</th>
    </tr>
  </thead>

  
  <tbody>
  <?php
  $index = 0;
  $total = 0;
  if(!empty($_SESSION['cart'])){

            if(!isset($_SESSION['qty_array'])){
                $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
            }
            $sql = "SELECT * FROM tbl_product WHERE product_id IN (".implode(',',$_SESSION['cart']).")";
            $query = $connect->query($sql);
                while($row = $query->fetch_assoc()){
                    ?>
                      <tr> 

                        <td><?php echo $row['product_name'];?><td>
                        <?php echo $_SESSION['qty_array'][$index]; ?>                    
                        <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                        <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
                        <p class="text-danger">  <?php $total += $_SESSION['qty_array'][$index]*$row['price']; ?></p>
                        <td>
                      </td>              
                      <?php
                            $index ++;
                        }
  }
  else
  {
    ?>
    <tr>
        <td colspan="4" class="text-center">No Item in Cart</td>
    </tr>
    
    <?php
    
    }
    
    ?>
    <tr>
						<td colspan="2" align="right"><b>Total</b></td>
           
						<td class="text-danger"><b><?php echo number_format($total, 2); ?>$</b></td>
					</tr>
<?php 
?>
  </tbody>
  
</table>
<h3 class="text-center text-uppercase">comfirm Order</h3>
<form class="bg-light.bg-gradient p-5 rounded-3 border" action="code.php" method="POST">
  <div class="row">
  <div class="col-lg-6  col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> Your Name</label>
      <input type="text" name="txtname" class="form-control" placeholder="Your phone number">
    </div>

    <div class="col-lg-6  col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> your phone number</label>
      <input type="text" name="txtnumberPhone" class="form-control" placeholder="Your phone number">
    </div>
    
    <div class="col-lg-6 col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> your email</label>
      <input type="text" name="txtEmail" required class="form-control" placeholder="Your email">
    </div>
    <div class="col-lg-6  col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> payment method</label>
      <input type="text" name="txtPay" required class="form-control" placeholder="Your payment method">
    </div>
    <div class="col-lg-6 col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> Address line 1</label>
      <input type="text" name="txtAddress1" required class="form-control" placeholder="your address 1">
    </div>
    <div class="col-lg-6  col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> Address line 2</label>
      <input type="text" name="txtAddress2" required class="form-control" placeholder="your address 1">
    </div>
    <div class="col-lg-6 col-sm-12 mt-2">
    <label class="col-form-label" for="inputEmail4"> city</label>
      <input type="text" name="txtcity"  required class="form-control" placeholder="city">
    </div>
    <div class="col-lg-6  col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> state</label>
      <input type="text" name="txtState"  required class="form-control" placeholder="state">
    </div>
    <div class="col-lg-6 col-sm-12 mt-2">
    <label class="col-form-label" for="inputEmail4"> country</label>
      <input type="text" name="txtcountry" required class="form-control" placeholder="contry">
    </div>
    <div class="col-lg-6  col-sm-12  mt-2">
    <label class="col-form-label" for="inputEmail4"> pink code</label>
      <input type="text" name="txtPinkcode" required class="form-control" placeholder="pink code">
    </div>
  </div>
  <div class="submit m-5">
 <div class="col-lg-6  col-sm-12">
 <input class="btn btn-warning text-white" name ="btnOder"type="submit"   value="Oder">
 <a class="btn btn-primary " name="OrderBtn"  data-bs-toggle="modal" href="#exampleModalToggle" role="button">invoice</a>
 </div>

  </div>

</form>


</div>
</div>

</body>
</html>
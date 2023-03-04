<?php
$connect=new Mysqli('localhost','root','','db_ss1');
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
            <a class="navbar-brand d-flex justify-content-between order-lg-0 " href="#"> 
                <!--<img src="imag/brand.png" alt="site icon">-->
                    <span class="text-uppercase fw-lighter ms-2">APOLO</span>
            </a>
            <div class="order-lg-2 nav-btns ">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"> 5 </span>

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



    <h3 class="text-center text-uppercase">SHOPING Card</h3>
<section>

<div class="container mt-5">
<?php 
        $id=$_GET['id'];
        $detail="SELECT * FROM tbl_product where product_id ='$id'";
        $detailproduct =$connect->query($detail);
            while($row= mysqli_fetch_assoc($detailproduct))
            {

                ?>

<table class="table table-hover">
<thead class="bg-dark ">
    <tr>
      <th scope="col" class="text-white">image</th>
      <th scope="col"  class="text-white">name</th>
      <th scope="col"  class="text-white">price</th>
      <th scope="col"  class="text-white">Quanity</th>
      <th scope="col"  class="text-white">Total Price</th>
      <th scope="col"  class="text-white">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="" >
        <img src="./upload/<?php echo $row['image_product']?>" alt="" style="width:30px;">
      </th>
      <td><?php echo $row["product_name"]?></td>
      <td>$ <?php echo $row['price'] ?></td>
      <td class="row">  
        <div class="col-2">
        <input class="form-control w-0 "type="number" name="Product_QTY" value="1">
        </div>
      
       <div class="col-4"> <button class="btn btn-warning text-white">update</button></td></div>
      <td>Otto</td>
      <td> <button class="btn btn-primary">delete</button> </td>
    </tr>
  
  </tbody>

</table>
                            <?php

}
?>



<button class="btn btn-primary text-center">check out</button>
</div>
<a href="indeex2.php">back</a>
</section>




    <script src="jquery-3.6.3.js"></script>
   <script src="index.js"></script>

   <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

  

</body>
</html>
  <!--colection--->
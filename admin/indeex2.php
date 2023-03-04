<?php 
$connect=new Mysqli('localhost','root','','db_ss1');
$product="SELECT * FROM tbl_product";
$all_product =$connect->query($product);



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
    <link rel="stylesheet" href="index.css">
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
   <!--end of narbar--->
    <header id="header" class="vh-100 carousel slide " data-bs-ride="carousel" style="padding-top: 104px ">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active ">
                <h2 class="text-capitalize text-white "> Best Collection</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">New arrivals </h1>
                <a href="#" class="btn mt-3 text-uppercase"> shop now</a>
            </div>
            <div class="text-center carousel-item ">
                <h2 class="text-capitalize text-white "> Best  price</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">New seson </h1>
                <a href="#" class="btn mt-3 text-uppercase"> buy now</a>
            </div>
        </div>
    </header>
    <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="prev">
        <span class="carousel-control-next-icon"></span>
    </button>

  <!--colection--->
<section id="collection" class=""> 
    <div class="container">
        <div class="title text-center mt-5">
            <h2 class="posistion-relative text-uppercase text-danger fw-bold "> New collection</h2>
        </div>
        <div class="row g-0">
            <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group ">
                <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*"> all</button>
                <button type="button" class="btn m-2 text-dark " data-filter=".best">T-Shirt</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".feat">Jean</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".new"> jacket</button>
             </div>
            <div class="collection-list mt-4 row gx-0 gy-3">
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <?php 
                    while($row = mysqli_fetch_assoc($all_product)){
                        $id=$row['product_id'];
                    ?>
                    <div class="collection_image">
                         <a href=""><img src="./upload/<?php echo $row["image_product"]?>" alt="" class="w-100"></a> 
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1"><?php echo $row ['product_name'] ?></p>
                                     <span class="fw-bold"><?php echo $row['price'] ?></span>
                    </div>
                </div>
                    <?php

                }
                    ?>
                    <!--
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection_image">
                    <img src="image/top_rated_1.jpg" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class="collection_image">
                    <img src="image/special_product_4.jpg" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class="collection_image">
                    <img src="image/special_product_1.jpg" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection_image">
                    <img src="image/special_product_2.jpg" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class="collection_image">
                    <img src="image/special_product_3.jpg" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class="collection_image">
                    <img src="image/special_product_4.jpg" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection_image">
                    <img src="image/c_western-shirt.png" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class="collection_image">
                    <img src="image/c_tunic-shirt_girl.png" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class="collection_image">
                    <img src="image/c_t-shirt_men.png" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>

                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection_image">
                    <img src="image/c_polo-shirt.png" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class="collection_image">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>        
                    </div>
                    <div class="text-center">
                            <div class="rating mt-3">
                                 <span class="text-danger"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-danger"><i class="fa-regular fa-star"></i></span>
                              </div>
                                 <p class="text-capitalize my-1">gray shirt</p>
                                     <span class="fw-bold">1000$</span>
                    </div>
                 </div>
           </div>
        </div>
    </div>
  </section>-->
  <!--specail product-->
<section id="special" class="py-5">
    <div class="container">
        <div class="title text-center py-5 ">
            <h2 class="text-uppercase text-danger fw-bold">specail selection</h2>
        </div>
        <div class="specail-list row g-0">
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="specail_image position-relative overflow-hidden ">
                    <img src="image/c_shirt-girl.png" alt="" class="w-100">
                    <span class="position-absolute text-primary fs-4 d-flex align-items-center justify-content-center">
                     <i class="fa-solid fa-heart"></i>
                    </span>
                </div>
                <div class="text-center">
                    <p class="text-capitalize mt-3 mb-1 "> gray</p>
                    <span class="fw-bold d-block">$54.00</span>
                    <a href="#" class="btn btn-primary mt-3 ">Add to card</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--specail product end-->
<!--block-->
<!--block end end-->
<section id="offer" class="py-5" >
    <div class="container">
        <div class="row d-flex align-items-center text-center justify-content-lg-start text-lg-start">
            <div class="offers-containt">
                <span class="text-white">Discont up t0 50%</span>
                <h2 class="mt-2 mb-4 text-white ">Grand sale offers</h2>
               <a href="#" class="btn">buy now</a>
            </div>
        </div>
    </div>
</section>
<!--block-->
<section id="blogs" class="py-5 mt-5">
    <div class="container">
        <div class="title">
            <h2 class=" text-center text-uppercase text-danger fw-bold">our last blog</h2>
        </div>
        <div class="row g-3 mt-5">
            <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                <img src="image/blog_1.jpg" alt="">
                <div class="card-body px-0">
                    <h4 class="card-title">Lorem ipsum dolor sit amet consectetur 
                         excepturi! Quae magnam eius iste aperiam.</h4>
                         <p class="text-card mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolores culpa doloribus adipisci expedita dignissimos officiis facere aperiam debitis delectus! Sint iure ut nesciunt
                             doloribus ipsam molestiae. Doloremque, nemo officia.</p>
                             <p class="card-text">
                                <small class="text-muted">
                                   <span class="fw-bold">Author:</span> heng
                                </small>
                             </p>
                            <a href="#"class="btn"> read more</a>
                </div>
            </div>
            <div class="card border-0 col-md-6 col-lg-4  bg-transparent my-3">
                <img src="image/blog_1.jpg" alt="">
                <div class="card-body px-0">
                    <h4 class="card-title">Lorem ipsum dolor sit amet consectetur 
                         excepturi! Quae magnam eius iste aperiam.</h4>
                         <p class="text-card mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolores culpa doloribus adipisci expedita dignissimos officiis facere aperiam debitis delectus! Sint iure ut nesciunt
                             doloribus ipsam molestiae. Doloremque, nemo officia.</p>
                             <p class="card-text">
                                <small class="text-muted">
                                   <span class="fw-bold">Author:</span> heng
                                </small>
                             </p>
                            <a href="#"class="btn"> read more</a>
                </div>
            </div>
            <div class="card border-0 col-md-6 col-lg-4  bg-transparent my-3">
                <img src="image/blog_1.jpg" alt="">
                <div class="card-body px-0">
                    <h4 class="card-title">Lorem ipsum dolor sit amet consectetur 
                         excepturi! Quae magnam eius iste aperiam.</h4>
                         <p class="text-card mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolores culpa doloribus adipisci expedita dignissimos officiis facere aperiam debitis delectus! Sint iure ut nesciunt
                             doloribus ipsam molestiae. Doloremque, nemo officia.</p>
                             <p class="card-text">
                                <small class="text-muted">
                                   <span class="fw-bold">Author:</span> heng
                                </small>
                             </p>
                            <a href="#"class="btn"> read more</a>
                </div>
            </div>
            
        </div>
    </div>

</section>
<!--block end-->
<!--about end-->
<section id="about" class="py-5">
    <div class="container">
        <div class="row gy-lg-5 align-items-center">
            <div class="col-lg-6 order-log-1 text-center text-lg-start">
                <div class="title pt-3 pb-5">
                    <h2 class="text-center text-uppercase text-danger fw-bold">About us</h2>
                </div>
                <p class="lead text-muted ">Lorem ipsum, dolor s Illo magnam nesciunt dolor architecto, rerum tempora.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt ullam explicabo perferendis, aliquam dignissimos magni molestias eaque quasi quas dolores dolorem repudiandae ipsa quis
                     commodi voluptates, officiis incidunt, numquam reiciendis.</p> 

            </div>
            <div class="col-lg-6 order-log-1">
                <img src="image/about_us.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!--about end-->
<!--pupular-->
<section id="popular" class="py-5">
    <div class="container">
        <div class="title text-center pt-3 pb-5">
            <h2 class="text-center ms-4 text-uppercase text-danger fw-bold">pupular of this year</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Top rated</h3>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Top rated</h3>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 row g-3">
            <h3 class="fs-5">Top rated</h3>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            <div class="d-flex aling-items-start">
                <img src="image/top_rated_1 (1).jpg" alt="" class="img-fluid pe-3 w-25">
                <div class="">
                    <p class="mb-0">brlue shirt</p>
                    <span class="text-danger">$ 20.00</span>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</section>
<!--popular  end-->
<!--newlatter  end-->
<!--<section id="newletter" class="py-5">
    <div class="container" class="py-5">
        <div class=" align-items-center justiy-content-center">
            <h2 class="text-center">newlatter subscription</h2>
        </div>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam quod libero, incidunt possimus laboriosam, facere itaque placeat aliquam quisquam quasi 
            officiis expedita ut quis impedit unde nisi ducimus error.</p>
            <div class="input-group mb-3 mt-3">
                <input type="text"class="form-control" name="text" id="text" placehoder="Enter email...">
                <button class="btn btn-primary" type="submit"> subcriptibe</button>
            </div>
    </div>
</section>-->
<!--latter end  end-->
<!--footer-->
<!-- Footer -->
<footer class="bg-dark  text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4 text-center">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input  type="email" id="form5Example21" class="form-control w-100"placeholder="Email address...">
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
 <!-- Section: Links -->  
 <section>
    <div class="row ">
        <div class="col-lg-3 col-sm-4">
        <h4 class="text-uppercase mt-5 text-center">APO <span class="text-danger" style="font-size:40px;font-family:sans-serif ;">  HCP</span></h4>
        <div class="socail">
           
        </div>
        </div>
        <div class="col-lg-3 col-sm-4">
        <h4 class="text-uppercase">catagory</h4>
        <div class="socail">
        <p class="text-muted text-uppercase">Jean</p>
        <p class="text-muted text-uppercase">Taket</p>
        <p class="text-muted text-uppercase">T-shirt</p>
        <p class="text-muted text-uppercase">new arrival</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-4">
        <h4 class="text-uppercase">information</h4>
        <div class="socail">
          <a href=" "><p class="text-muted text-uppercase">collection</p></a> 
           <p class="text-muted text-uppercase">specail</p>
           <p class="text-muted text-uppercase">blog</p>
           <p class="text-muted text-uppercase">about as</p>
           <p class="text-muted text-uppercase">popular</p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="decription">
            <h4 class="text-uppercase">Contact</h4>
                <div class="myapp">
                   <div class="row">
                   <div class="col-lg-6 col-6">
                        <div class="playstore">
                            <img src="image/play store.png" alt="">
                        </div>
                    </div>
                        <div class="col-lg-6  col-6">
                        <div class="playstore">
                            <img src="image/play store.png" alt="">
                        </div>
                     </div>
                   </div>
                </div>
             </div>
             <div class="text mt-2">
                <div class="location">
                    <div class="locationdDes">
                        <i class="fa-solid fa-location-dot" style="font-size:20px;"></i><span class="text-muted"> location</span>  <span class="text-muted"> 168st #001 kondal province, in cambodia </span><br>
                    </div>
                </div>
                <div class="phoneNumber">
                    <i class="fa-solid fa-phone"></i><span class="text-muted"> phone</span>  <span class="text-muted">011558927</span>
                </div>
                <div class="email">
                     <i class="fa-solid fa-envelope"></i><span class="text-muted"> Email :</span> <span class="text-muted">kheang@gmail.com </span>
                </div>
             </div>
        </div>
    </div>
 </section>
  <!-- Grid container -->

  <!-- Copyright -->
 
  <!-- Copyright -->
</footer>
<div class="text-center p-3 container-fluit" style="background-color:pink;">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">konchkea.com</a>
  </div>
<!-- Footer -->
<!--isotope js-->
   
   <script src="jquery-3.6.3.js"></script>
   <script src="index.js"></script>

   <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

  

</body>
</html>
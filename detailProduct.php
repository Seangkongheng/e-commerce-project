<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--icont-->
    <script src="https://kit.fontawesome.com/440cfc8658.js" crossorigin="anonymous"></script>
    <!--style link-->
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
       <!--nav bak-->
 <section id="navbar">
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
</section>
<section id="prodcutdetail" class="prodcutdetail">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-ms-12 col-12">
                <img class="img-fluid w-100 pb-1 "src="image/top_rated_3.jpg" id="MainImage" alt="">
                <div class="small-image-group ">
                    <div class="smial-img-col">
                        <img src="image/special_product_2.jpg" class="small-image" width="100%"alt="">
                    </div>
                    <div class="smial-img-col">
                        <img src="image/special_product_1.jpg" class="small-image"  width="100%"alt="">
                    </div>
                    <div class="smial-img-col">
                        <img src="image/special_product_3.jpg" class="small-image"  width="100%"alt="">
                    </div>
                    <div class="smial-img-col">
                        <img src="image/special_product_4.jpg "class="  small-image "  width="100%"alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-ms-12 col-12">
                <h6 class="text-muted text-uppercase w-100 fst-italic">home/T-shirt</h6>
                <!--titile clothes-->
                <h3>Men's fashion T shirt</h3>
                <h6 style=" font-size: 0px;">T-shirt is the best for your and have multiple choice for your favarite </h6>
                      <div class="rating mt-3">
                                 <span class="text-primary"><i class="fa-regular fa-star "></i></span>
                                 <span class="text-primary"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-primary"><i class="fa-regular fa-star"></i></span>
                                 <span class="text-primary"><i class="fa-regular fa-star"></i></span>
                                 <span class="ttext-primary"><i class="fa-regular fa-star"></i></span>
                         </div>
                      
                <h6 class="text-danger text-decoration-line-through">$200 </h6><span class="text-warning">(50% of)</span>
                <h2>$100 </h2>
                <div class="choose">
                <select class="my-3 form-select"name="" id="">
                    <option value="">Select Size</option>
                    <option value="">XL</option>
                    <option value="">XXL</option>
                    <option value="">smiall</option>
                    <option value="">larght</option>
                </select> 
                </div>
                <div class="group_addtocard d-flex">   
                     <input class="form-control "type="number" name="number" id="">
                    <a href="userLogin.php"> <button class="addTo_card"> <i class="fa-solid fa-cart-shopping"></i>Add to card</button></a>
                </div>
                <h4 class="mt-5 text-muted">Decription</h4>
                <ul>
                    <li>hello my name is seang kong heng</li>
                    <li>hello my name is seang kong heng</li>
                    <li>hello my name is seang kong heng</li>
                
                </ul>
                <h4 class=" mt-5 text-muted">material & case</h4>
                <ul>
                    <li>hello my name is seang kong heng</li>
                    <li>hello my name is seang kong heng</li>
                    <li>hello my name is seang kong heng</li>
                
                </ul>
               <a href=" "><button class="buyNow" onclick="alert('')"> <i class="fa-solid fa-cart-shopping"></i>buy now</button></a> 
            </div>
        </div>
    </div>
</section>
<section id="special" class="">
    <div class="container">
        <div class="title text-center py-5 ">
            <h2 class="text-uppercase text-danger fw-bold">New releas</h2>
            <h6 class="text-center text-muted  ">Here you can check out new product with fair price on rymo</h6>
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
            
        </div>
    </div>
</section>
<footer class="bg-dark  text-white py-4 mt-5">
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
              <input type="email" id="form5Example21" class="form-control"placeholder="Email address...">
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
  <script src="indexDetail.js">

  </script>
</body>
</html>
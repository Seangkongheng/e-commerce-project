<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commer Website</title>
    <link rel="stylesheet" href="indexpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Fontsomeone-->
    <script src="https://kit.fontawesome.com/440cfc8658.js" crossorigin="anonymous"></script>

</head>
<body>
    <!---Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top ">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between order-lg-0 " href="#"> 
                <!--<img src="imag/brand.png" alt="site icon">-->
                    <span class="text-uppercase fw-lighter ms-2">Heng Store</span>
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
                        <a href="#" class="nav-link text-uppercase text-dark">collection</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#" class="nav-link text-uppercase text-dark">specail</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#" class="nav-link text-uppercase text-dark">blogs</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#" class="nav-link text-uppercase text-dark">about us</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a href="#" class="nav-link text-uppercase text-dark">Popurlar</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
   <!--end of narbar--->
    <header id="header" class=" vh-100 carousel slide " data-bs-ride="carousel" style="padding-top: 104px ">
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
<section id="collection" class="py-5">
    <div class="container">
        <div class="title text-center">
            <h2>New collection</h2>
        </div>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center mt-5">
               <button type="button"class="btn m-2​" > all</button>
               <button type="button"class="btn m-2​" > best saler</button>
               <button type="button"class="btn m-2​" > featured</button>
               <button type="button"class="btn m-2​" > new arrive</button>
            </div>
        </div>
    </div>
</section>
   <!--specail product end-->


    <!-js --->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>


</body>
</html>
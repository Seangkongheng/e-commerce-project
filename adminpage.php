<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <!--icont-->
     <script src="https://kit.fontawesome.com/440cfc8658.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleeAdmin.css">
</head>
<body>
<section>
<div class=" main-container d-flex " id="wrapper">
    <div class="sidebar" id="side-nav"> 
        <div class="header-box px-2 pt-3 pb-4  ">
            <h1 class="fs-4 text-center">heang</h1>
            <button class="btn  d-md-none  d-block close-btn   px-1 py-0 text-white"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>
        <ul class="list-unstyled px-2">
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-gauge"></i>dasbod</a></li>
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-right-from-bracket"></i></i>product</a></li>
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-poo"></i>view product</a></li>
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-poo"></i>catagory</a></li>
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-poo"></i> <span>view catagory</span>
                </a></li>
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-gear"></i>System setting</a></li>
            <li  class=""> <a href="" class=" text-decoration-none"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
            <li  class=""> <a href="" class=" text-decoration-none">dasbod</a></li>
        </ul>
        <hr class="h-color mx-3">
        

        <ul class="list-unstyled">
             <li  class=""> <a href="" class=" text-decoration-none">setting</a></li>
             <li  class=""> <a href="" class=" text-decoration-none">setting</a></li>
        </ul>
    </div>
<div class="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">
            <div class="d-flex justify-content-between">
              <a class="navbar-brand fs-4" href="#">Navbar</a>
              <button class="btn px-1 py-0 open-btn"><i class="fa-solid fa-bars-staggered"></i></button>
            </div>
                   
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active ">
                            <a class="nav-link" href="#">profile <span class="sr-only">(current)</span></a>
                        </li>  
                    </ul>
                </div>
         </div>
        
    </nav>  
</div>
<script src="adminpage.js">

</script>
</section>
</body>
</html>
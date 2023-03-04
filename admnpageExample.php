<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <!--icont-->
     <script src="https://kit.fontawesome.com/440cfc8658.js" crossorigin="anonymous"></script>
<style>
    
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
line-height:50px ;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn i {
  font-size: 20px;
  cursor: pointer;
  color: black;

}
.openbtn{
    border:none;
}

#main {
  transition: margin-left .5s;
  pa
}
hr .h-color{
    background: #eee;
}
.table_product{
    width:70%;
    margin: 0 auto;
}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
<div id="mySidebar" class="sidebar ">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <h1 class="text-center  boder-bottom"><span class="text-white fs-4 fw-bold">APOLO</span> </h1>
  <a href="#" class="border-top"><i class="fa-solid fa-gauge "></i> Add Product</a>
  <a href="#"><i class="fa-solid fa-gauge"></i>view product</a>
  <a href="#"><i class="fa-solid fa-gauge"></i>catagory</a>
  <a href="#"><i class="fa-solid fa-gauge"></i>view catagory</a>
  <a href="#" class="border-bottom"><i class="fa-solid fa-gauge"></i>System setting</a>
  <a href="#"><i class="fa-solid fa-right-from-bracket"></i><span class="text-danger">logout </span> </a>
</div>

<div id="main">
<div class="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
         <div class="container">
            <div class="d-flex justify-content-between ">
              <a class="navbar-brand fs-4 text-white fw-bold" href="#">Dasboard</a>
              <button class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></button>
            </div>
                   
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active ">
                            <a class="nav-link text-white fw-bold" href="#">profile <span class="sr-only">(current)</span></a>
                        </li>  
                    </ul>
                </div>
         </div>
        
    </nav>  
 <section id="table product">
    <div class="table_product ">
        <h1>product list</h1>
    <table class="table table-hover table-dark ">
  <thead>
    <tr>
      <th scope="col">product ID</th>
      <th scope="col">product name</th>
      <th scope="col">qunity</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <button class="btn btn-danger">delete</button>
      <button class="btn btn-warning">edit</button>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
</section>
</div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 

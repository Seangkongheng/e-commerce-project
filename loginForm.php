<?php
//coneect mysql
$connect=new Mysqli('localhost','root','','Ecommerceproject');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!--loginFrom--->
    <div class="background">
        <img src="image/tamanna-rumee-eD1RNYzzUxc-unsplash.jpg" alt="">
    </div>
<section class="">
    <div class="login_From">
        <div class="logo">
            <img src="image/thumb-rocket-america-removebg-preview.png" alt="">
            <h1>APOLO <span class=" text-warning"> HCP</span> </h1>
        </div>
           
        <form  class="form-group" action=""​ method="POST">
            <label for="">Username</label>
            <input class="form-control"type="text" name="txt_id" id="txt_id" placeholder="&#Xf007;  Please  username"  style="font-family:Arial, FontAwesome">
            <label for="">password</label>
            <input class="form-control"type="password" name="txt_password" id="txt_password" placeholder="&#Xf023;  Please  Password "style="font-family:Arial, FontAwesome" >
            <a href="adminpage.php"><input class="btn btn-primary form-control mt-3" type="submit" value="LOING" ></a>
            <div class="row mt-2">
                <div class="col-6">
                    <p> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">   you stay login</p>
                </div>
                <div class="col-6">
                   <a href=""><p>You forgot Password?</p></a> 
                </div>  
            </div>
        </form>
    </div>   
</section>
</body>
</html>
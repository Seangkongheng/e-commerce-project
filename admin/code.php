<?php
session_start();
//coneect mysql
$connect=new Mysqli('localhost','root','','db_ss1');


if(isset($_POST['registerbtn']))
{
    $fistName=$_POST['fistName'];
    $lastName=$_POST['lastName'];
    $userName=$_POST['username'];
    $Password=$_POST['password'];
    $comfirmpassword=$_POST['confirm_password'];
    $email=$_POST['email'];
    //cofirm with pass

    if($Password==$comfirmpassword){
        
            
    $sql="INSERT INTO admin_registration (fistname,lastName,userName,Password,email) 
    VALUES('$fistName','$lastName','$userName','$Password','$email') ";
    $query_run =Mysqli_query($connect,$sql);

        if($query_run)
        {
            $_SESSION['success']="admin profile added";
            header('location: register.php');
        }
        else
        {
            $_SESSION['status']="admin profile not added";
            header('location: register.php');
        }
    }
    else
    {
        $_SESSION['status']="password and comfilm password is not match";
        header('location: register.php');
    }

}


if(isset($_POST['registerbtnAdmin']))
{
    $fistName=$_POST['fistName'];
    $lastName=$_POST['lastName'];
    $userName=$_POST['username'];
    $Password=$_POST['password'];
    $comfirmpassword=$_POST['confirm_password'];
    $email=$_POST['email'];
    //cofirm with pass

    if($Password==$comfirmpassword){
        
            
    $sql="INSERT INTO admin_registration (fistname,lastName,userName,Password,email) 
    VALUES('$fistName','$lastName','$userName','$Password','$email') ";
    $query_run =Mysqli_query($connect,$sql);

        if($query_run)
        {
            $_SESSION['success']="admin profile added";
            header('location: loginForm.php');
        }
        else
        {
            $_SESSION['status']="admin profile not added";
            header('location: loginForm.php');
        }
    }
    else
    {
        $_SESSION['status']="password and comfilm password is not match";
        header('location: loginForm.php');
    }

}








//udate row
if(isset($_POST['btnupdae']))
{
    $id=$_POST['edit_id'];
    $fistName=$_POST['editfistName'];
    $lastName=$_POST['editlastName'];
    $userName=$_POST['editusername'];
    $Password=$_POST['editpassword'];
    $email=$_POST['editemail'];
    $query ="UPDATE admin_registration set fistName='$fistName',lastName='$lastName',userName='$userName',password='$Password',email='$email' where id='$id' ";
    $query_run= Mysqli_query($connect ,$query);



    if( $query_run)
    {
        $_SESSION['success']="you are data is update";
        header('location: register.php');
    }
    else
    {
        $_SESSION['status']="you are data is not update";
        header('location: register.php');
    }
}
//deletrow
if(isset($_POST['btndelete'])){
    $id =$_POST['deleteID'];
    $query = "DELETE from admin_registration where  id='$id'";
    $query_run = mysqli_query($connect,$query);

    if( $query_run)
    {
        $_SESSION['success']="you are data is deleted ";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status']="you are data is not delete";
        header('location: register.php');
    }
}

//login form
//check fill


    if(isset($_POST['BTNlogin']))
    {
   $userName_login=$_POST['txt_username'];
   $password_login=$_POST['txt_password'];
   
  $query = "SELECT * FROM admin_registration WHERE userName ='$userName_login' AND Password='$password_login'";
  $result =mysqli_query($connect,$query);


 if(mysqli_num_rows($result)==1)
 {
    $rows=mysqli_fetch_array($result);
    $_SESSION['userName'] = $row[' userName'];
    header("Location: indexpphp.php");
 }
 else
 {
    header("Location: loginForm.php?error=");
 }

  }

//add catagory
 if(isset($_POST['categorybtn']))
 {
    $catagoryName=$_POST['catageName'];
    $categoryDes=$_POST['categoryDec'];

    $sql="INSERT INTO tbl_category (category_name,description) 
    VALUES('$catagoryName','$categoryDes')";
     $result = mysqli_query($connect, $sql);
     if($result)
     {
         $_SESSION['success']="catagory added";
         header('location: catagory.php');
     }
     else
     {
         $_SESSION['status']="catagory not added";
         header('location: catagory.php');
     }
     /*if(mysqli_errno($connect) > 0){
        die(mysqli_error($connect));
    }*/

 }
//delete
 if(isset($_POST['btndeleteCatagory'])){
    $id_cat =$_POST['deleteIDcatagory'];
    $query = "DELETE from tbl_category where category_id='$id_cat'";
    $query_run = mysqli_query($connect,$query);

    if( $query_run)
    {
        $_SESSION['success']="you are data is deleted ";
        header('Location: catagory.php');
    }
    else
    {
        $_SESSION['status']="you are data is not delete";
        header('location: catagory.php');
    }
}

//udate row
if(isset($_POST['updateCatagory']))
{
    $id=$_POST['edit_id'];
    $catagoryName=$_POST['catageName'];
    $categoryDes=$_POST['categoryDec'];
    $query =" UPDATE tbl_category set category_name ='$catagoryName',description='$categoryDes' where category_id ='$id'";
    $query_run= Mysqli_query($connect ,$query);
    if( $query_run)
    {
        $_SESSION['success']="you are data is update";
        header('location: catagory.php');
    }
    else
    {
        $_SESSION['status']="you are data is not update";
        header('location: catagory.php');
    }
}
//insert product

if(isset($_POST['insertProdcut']))
{
    $prodcutNmae=$_POST['txt_productName'];
    $product_catagory=$_POST['select_catagory'];
    $pice_product=$_POST['txt_price'];
    $decription_product=$_POST['txt_description'];
    $path="./upload";
    

    $image = $_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
   
    $image1 = $_FILES['image1']['name'];
    $temp_image1 = $_FILES['image1']['tmp_name'];
    
    $image2 = $_FILES['image2']['name'];
    $temp_image2 = $_FILES['image2']['tmp_name'];

    $image3 = $_FILES['image3']['name'];
    $temp_image3 = $_FILES['image3']['tmp_name'];

    $image4 = $_FILES['image4']['name'];
    $temp_image4 = $_FILES['image4']['tmp_name'];

    $sql="INSERT INTO tbl_product (product_name ,image_product,productcatagory,price,decription,image_product1,image_product2,image_product3,image_product4,addtime)
        VALUES ('$prodcutNmae','$image','$product_catagory','$pice_product','$decription_product','$image1','$image2','$image3','$image4',now())";
        $result_query=mysqli_query($connect,$sql);
        if($result_query)
            {
                move_uploaded_file($image_tmp,"upload/$image");
                move_uploaded_file($temp_image1,"upload/$image1");
                move_uploaded_file($temp_image2,"upload/$image2");
                move_uploaded_file($temp_image3,"upload/$image3");
                move_uploaded_file($temp_image4,"upload/$image4");
                $_SESSION['success']="successfull";
                header('location: product.php');
            }
            else
            {
                $_SESSION['status']="your product cannot add";
                header('location: product.php');
            }
        
    }
    /*$image = $_FILES['image']['name'];
    $path="./upload";
    $image_ext= pathinfo($image,PATHINFO_EXTENSION);
    $filename =TIME().'.'.$image_ext;

    $image1 = $_FILES['image1']['name'];
    $path="./upload";
    $image_ext1= pathinfo($image1,PATHINFO_EXTENSION);
    $filename1 =TIME().'.'.$image_ext1;


     //insert product 
        $sql="INSERT INTO tbl_product (product_name ,image_product,productcatagory,price,decription,image_product1)
        VALUES ('$prodcutNmae','$filename','$product_catagory','$pice_product','$decription_product','$filename1')";
        $result_query=mysqli_query($connect,$sql);

        if($result_query)
            {
                move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
                move_uploaded_file($_FILES['image1']['tmp_name'],$path.'/'.$filename1);
                $_SESSION['success']="successfull";
                header('location: product.php');
            }
            else
            {
                $_SESSION['status']="you are data is not update";
                header('location: product.php');
            }
        
    }
    */

    //delete product

    if(isset($_POST['btndeleteproduct'])){
        $id_product= $_POST['deleteproduct'];
        $query = "DELETE from tbl_product where product_id ='$id_product'";
        $query_run = mysqli_query($connect,$query);
    
        if( $query_run)
        {
            $_SESSION['success']="you are data is deleted ";
            header('location: product.php');
        }
        else
        {
            $_SESSION['status']="you are data is not delete";
            header('location: product.php');
        }

    }

/*
///*check empty

    if($prodcutNmae=='' or $prodcut_instock==''or $catagroy_product=='' or  $description==''
    or $price=='' or $txt_img==''or $txt_img1==''or  $txt_img2=='' or  $txt_img3==''or $txt_img4==''){
        echo "<script> alert('please fill')</script>";
    }else{
        move_uploaded_fill($temp_img,"./product_image/$txt_img");
        move_uploaded_fill($temp_img1,"./product_image/$txt_img1");
        move_uploaded_fill($temp_img2,"./product_image/$txt_img2");
        move_uploaded_fill($temp_img3,"./product_image/$txt_img3");
        move_uploaded_fill($temp_img4,"./product_image/$txt_img4");

        //insert product 
       /* $sql="INSERT INTO tbl_product (product_name ,instock,category_id,description,price_out,created_at,image,image1,image2,image3,image4)
        VALUES ('$prodcutNmae','$prodcut_instock','$catagroy_product','$description','$price',now(),'$product_img','$txt_img1','$txt_img2','$txt_img3','$txt_img4')";
        $result_query=mysqli_query($connect,$sql);

        if($result_query)
            {
                $_SESSION['success']="you are data is update";
                header('location: product.php');
            }
            else
            {
                $_SESSION['status']="you are data is not update";
                header('location: product.php');
            }
        
    }
}*/
//updat prodcduct
if(isset($_POST['EditProduct']))
{

    $id=$_POST['prodcutedit'];
    $prodcutNmae=$_POST['productNameEdit'];
    $product_catagory=$_POST['select_catagoryEdit'];
    $pice_product=$_POST['txt_priceEdti'];
    $decription_product=$_POST['txt_descriptionEdit'];
    $path="./upload";


    $image = $_FILES['imageEDit']['name'];
    $image_tmp=$_FILES['imageEDit']['tmp_name'];
   
    $image1 = $_FILES['imageEDit1']['name'];
    $temp_image1 = $_FILES['imageEDit1']['tmp_name'];
    
    $image2 = $_FILES['imageEDit2']['name'];
    $temp_image2 = $_FILES['imageEDit2']['tmp_name'];

    $image3 = $_FILES['imageEDit3']['name'];
    $temp_image3 = $_FILES['imageEDit3']['tmp_name'];

    $image4 = $_FILES['imageEDit4']['name'];
    $temp_image4 = $_FILES['imageEDit4']['tmp_name'];

    $query =" UPDATE tbl_product set product_name='$prodcutNmae',image_product='$image' ,productcatagory=' $product_catagory'
    ,price='$pice_product',decription='$decription_product',image_product1='$image1',image_product2='$image2',image_product3='$image3',
    image_product4='$image4'where product_id ='$id'";
    $query_run= Mysqli_query($connect ,$query);
    if( $query_run)
    {
        $_SESSION['success']="you are data is update";
        header('location: product.php');
    }
    else
    {
        $_SESSION['status']="you are data is not update";
        header('location: product.php');
    }
}

//insert menu catagory

if(isset($_POST['iteminsert']))
 {
    $itemNam=$_POST['itemNam'];
    $status=$_POST['status'];
    $sql="INSERT INTO navbaritem (itemNam,status) 
    VALUES('$itemNam','$status')";
      $query_run = mysqli_query($connect,$sql);

      if($query_run)
       {
           $_SESSION['success']="catagory added";
           header('location: nanbarItem.php');
       }
       else
       {
           $_SESSION['status']="catagory not added";
           header('location: nanbarItem.php');
       }
     /*if(mysqli_errno($connect) > 0){
        die(mysqli_error($connect));
    }*/

 }
 //delete navbare menu
 if(isset($_POST['btndeleteNav'])){
    $id_item= $_POST['deleteIDitem'];
    $query = " DELETE from  navbaritem where navbarID ='$id_item'";
    $query_run = mysqli_query($connect,$query);

    if($query_run)
     {
         $_SESSION['success']="navbar item has delete";
         header('location: nanbarItem.php');
     }
     else
     {
         $_SESSION['status']="navbar item has notdelete";
         header('location: nanbarItem.php');
     }

}
//udate nav
if(isset($_POST['updateNavbar']))
{
    $id=$_POST['Edit_ID'];
    $NavName=$_POST['navNameEdit'];
    $navdesDes=$_POST['NavbardesEdit'];
    $query =" UPDATE navbaritem set itemNam ='$NavName',status='$navdesDes' where navbarID  ='$id'";
    $query_run= Mysqli_query($connect ,$query);
    if( $query_run)
    {
        $_SESSION['success']="navbar item has Edit";
        header('location: nanbarItem.php');
    }
    else
    {
        $_SESSION['status']=" navbar item has not Edite";
        header('location: nanbarItem.php');
    }
}
//insert Product Zise
    if(isset($_POST['btnAddsize'])){
        $sizeName=$_POST['sizeNameadd'];
        $query= "INSERT INTO productsize (sizename) VALUES ('$sizeName')";
        $query_run=Mysqli_query($connect,$query);
        if($query_run)
        {
        $_SESSION['success']="Your size has added";
            header('location: product_size.php');
           
        }
        else
        {
           
            $_SESSION['status']=" your size not add";
            header('location: product_size.php');
        }
    }

//delete Zise
if(isset($_POST['btnDeltesize']))
{
    $id=$_POST['deleteSize'];
    $sql=("DELETE FROM productsize WHERE ProductsizeID ='$id'");
    $query_run=mysqli_query($connect,$sql);
    if($query_run)
    {
        $_SESSION['success']="Your size has delete";
            header('location: product_size.php');
           
        }
        else
        {
           
            $_SESSION['status']=" your size not not delete";
            header('location: product_size.php');
        }
}
//delete edit
if(isset($_POST['updatsize']))
{
    $id=$_POST['edit_size'];
    $nameNaveEdit=$_POST['sizeNameEdit'];
    $sql=("UPDATE productsize SET sizename ='$nameNaveEdit' WHERE ProductsizeID='$id'");
    $query_run=mysqli_query($connect,$sql);
    if($query_run)
    {
        $_SESSION['success']="Your size has Edit";
        header('location: product_size.php');
       
    }
    else
    {
       
        $_SESSION['status']=" your size not not edit";
        header('location: product_size.php');
    }
    
}
    //add to card
    if(isset($_POST['Adcard']))
    {
       $addName=$_POST['txtName'];
       echo $addName;
    }

    //delete order
if(isset($_POST['btndeleteOrder']))
{
    $id=$_POST['deleteIDOrder'];
    $sql=("DELETE FROM tbl_order WHERE order_id  ='$id'");
    $query_run=mysqli_query($connect,$sql);
    if($query_run)
    {
       $_SESSION['success']="Your size has delete";
           header('location: Report.php');
       
           
        }
        else
        {
           
            $_SESSION['status']=" your size not not delete";
           header('location: Report.php');
          
        }
}
?> 
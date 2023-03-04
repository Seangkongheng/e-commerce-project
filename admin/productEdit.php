<?php 

include('include/header.php');
include('include/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Admin">
            Edit product</button>
        </div>
        
            <div class="card-body">

            <?php
            $connect=new Mysqli('localhost','root','','db_ss1');
                if(isset($_POST['btneditpoduct'])){
                $id_cat=$_POST['catagoryID_id'];
                echo $id_cat;
                $id_edit=$_POST['prodcutedit'];
                $query = "select * from tbl_product where product_id ='$id_edit' ";
                $query_run=Mysqli_query($connect,$query);
          
                
                //feching category name

                foreach($query_run as $row){
                 
                    ?>

                  
                    <form class="w-100" action="code.php" method="POST" enctype='multipart/form-data'>
                    <input type="hidden" name="prodcutedit" value=" <?php  echo $row['product_id']?>">
                <div class="modal-body">
            
                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">product Name</label>
                         </div>
                       <div class="col-8">
                         <input type="text" required name="productNameEdit" value="<?php  echo $row['product_name']?> " id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>

                   
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" required  class="col-form-label">price</label>
                         </div>
                       <div class="col-8">
                         <input type="text" name="txt_priceEdti" value="<?php  echo $row['price']?> "  class="form-control w-50" aria-describedby="passwordHelpInline">
                        </div>
                    </div>


                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">catagory</label>
                         </div>
                       <div class="col-8">
                       <select class="form-select form-select-lg mb-3"  required name="select_catagoryEdit" aria-label="form-select-lg example">
                          <option selected >
                          <?php   
                                      
                                     $categories="SELECT category_id ,category_name FROM tbl_category";
                                     $query_categories=mysqli_query($connect,$categories);

                                     while($categories = mysqli_fetch_assoc($query_categories)) {
                                      $cate_id = $categories['category_id'];
                                     
                                         if ($_POST['catagoryID_id']== $cate_id) {
                                             echo "<option value='$cate_id' selected>" . $categories['category_name'] . "</option>";
                                         } else {
                                             echo "<option value='$cate_id'>" . $categories['category_name'] . "</option>";
             
                                         }
                                     }
                                ?>
                          </option>
                  
                        </select>
                        </div>
                    </div>
                     <!--description-->
                     <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">decription</label>
                         </div>
                       <div class="col-8">
                        <textarea class="form-control" required name="txt_descriptionEdit" id="" cols="30" rows="5">
                        <?php  echo $row['decription']?>
                        
                        </textarea>
                        </div>
                    </div>
                  <!--price-->
                   
                    <!--stock-->
                    <!--<div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="inputPassword6" class="col-form-label">Instock</label>
                         </div>
                       <div class="col-8">
                         <input type="text"required  name="txt_instock" id="inputPassword6" class="form-control w-50" aria-describedby="passwordHelpInline">
                        </div>
                    </div>-->
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="" class="col-form-label">product img</label>
                         </div>
                       <div class="col-8">
                          <div class="d-flex justify-content-between">
                          <input  class="form-control w-50 m-auto"  name="imageEDit" type="file" id="formFile">
                          <img src="./upload/<?php  echo $row['image_product']?>" alt="" width="100px">
                          </div>
                               
                           
                        </div>
                    </div>
                      
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="" class="col-form-label">product img1</label>
                         </div>
                       <div class="col-8">
                          <div class="d-flex justify-content-between">
                          <input  class="form-control w-50 m-auto"  name="imageEDit1" type="file" id="formFile">
                          <img src="./upload/<?php  echo $row['image_product1']?>" alt="" width="100px">
                          </div>
                               
                           
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="" class="col-form-label">product img2</label>
                         </div>
                       <div class="col-8">
                          <div class="d-flex justify-content-between">
                          <input  class="form-control w-50 m-auto" name="imageEDit2" type="file" id="formFile">
                          <img src="./upload/<?php  echo $row['image_product2']?>" alt="" width="100px">
                          </div>
                               
                           
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="" class="col-form-label">product img3</label>
                         </div>
                       <div class="col-8">
                          <div class="d-flex justify-content-between">
                          <input  class="form-control w-50 m-auto" name="imageEDit3" type="file" id="formFile">
                          <img src="./upload/<?php  echo $row['image_product3']?>" alt="" width="100px">
                          </div>
                               
                           
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-4">
                        <label for="" class="col-form-label">product img</label>
                         </div>
                       <div class="col-8">
                          <div class="d-flex justify-content-between">
                          <input  class="form-control w-50 m-auto"  name="imageEDit4" type="file" id="formFile">
                          <img src="./upload/<?php  echo $row['image_product4']?>" alt="" width="100px">
                          </div>
                               
                           
                        </div>
                    </div>
                  <div class="modal-footer mt-5">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" name="EditProduct"class="btn btn-warning">Save changes</button>
                   </div>
              </div>
                    
                </form>




            <?php
                }
    
            }
        ?>



             </div>
        </div>
    </div>
</div>

<?php
include('include/script.php');
include('include/footer.php');
?>
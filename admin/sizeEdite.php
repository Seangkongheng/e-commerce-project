<?php 

include('include/header.php');
include('include/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Admin">
            Edit catagory</button>
        </div>
        
            <div class="card-body">
            <?php
            $connect=new Mysqli('localhost','root','','db_ss1');
                        if(isset($_POST['btneditsize'])){
                $id=$_POST['edit_size'];
                $query = "SELECT * FROM productsize WHERE ProductsizeID ='$id'";
                $query_run=Mysqli_query($connect,$query);
                                

                foreach($query_run as $row){
                    ?>

                        <form action="code.php" method="post">
                            <input type="hidden" name="edit_size" value="<?php  echo $row['ProductsizeID']?>">
                                <div class="form-group">
                                    <label>zie Name</label>
                                    <input type="text" name="sizeNameEdit" class="form-control" value="<?php  echo $row['sizename']?>" placeholder="Enter Username">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="updatsize"class="btn btn-primary">UPDATE</button>
                                </div>
                        
                         </form>
                         <?php
                }
    
            }
        ?>
        <a href="product_size.php" class="text-doracation-none">back</a>
             </div>
        </div>
    </div>
</div>

<?php
include('include/script.php');
include('include/footer.php');
?>
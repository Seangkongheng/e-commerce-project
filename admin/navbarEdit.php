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
             if(isset($_POST['nav_BTN'])){
            $id=$_POST['Edit_ID'];
            
                $query = "SELECT  * from  navbaritem  where  navbarID ='$id'";
                $query_run=Mysqli_query($connect,$query);
                                

                foreach($query_run as $row){
                    ?>

                        <form action="code.php" method="post">
                            <input type="hidden" name="Edit_ID" value="<?php echo $row['navbarID']?>">
                                <div class="form-group">
                                    <label>Menu name</label>
                                    <input type="text" name="navNameEdit" class="form-control" value="<?php  echo $row['itemNam']?>" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label>Decrtiption</label>
                                    <input type="text" name="NavbardesEdit" class="form-control checking_email"  value="<?php  echo $row['status']?>" placeholder="Enter Email">
                                    <small class="error_email" style="color: red;"></small>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="updateNavbar"class="btn btn-primary">UPDATE</button>
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
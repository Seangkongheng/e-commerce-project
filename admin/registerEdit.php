<?php 

include('include/header.php');
include('include/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Admin">
            Edit admin profile</button>
        </div>
        
            <div class="card-body">
            <?php
            $connect=new Mysqli('localhost','root','','db_ss1');
                        if(isset($_POST['btnedit'])){
                $id=$_POST['edit_Id'];
                $query = "select * from admin_registration where id='$id' ";
                $query_run=Mysqli_query($connect,$query);
                                

                foreach($query_run as $row){
                    ?>

                        <form action="code.php" method="post">
                            <input type="hidden" name="edit_id" value=" <?php  echo $row['id']?>">
                                <div class="form-group">
                                    <label> Fist name </label>
                                    <input type="text" name="editfistName" class="form-control" value="<?php  echo $row['fistname']?> " placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label>last name</label>
                                    <input type="text" name="editlastName" class="form-control checking_email"  value="<?php  echo $row['lastName']?>" placeholder="Enter Email">
                                    <small class="error_email" style="color: red;"></small>
                                </div>
                                <div class="form-group">
                                    <label>admin username</label>
                                    <input type="text" name="editusername" class="form-control" value="<?php  echo $row['userName']?> "placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" name="editpassword" class="form-control" value="<?php  echo $row['Password']?>" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="Email" name="editemail" class="form-control"   value="<?php echo $row['email']?>"  placeholder="Enter emil">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="btnupdae"class="btn btn-primary">UPDATE</button>
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
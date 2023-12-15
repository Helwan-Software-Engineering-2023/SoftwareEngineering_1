<?php

require_once "header.php";
require_once "navbar.php";

?>
<style>
    th{
        height: 60px;
    }
</style>
<section class="container">
    <div class="name-of-page">
        <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
    </div>

    <!--user profile info-->
    <div class="text-center mb-xl-5">
                <!--user profile photo-->
                <script src="../assets/userinfo.js"></script>
                <?php 

                    $photo = "../assets/images/profile.png";
                    if(isset($_SESSION['image']) && $_SESSION['image'] != 'null' || $_SESSION['image'] != '' || $_SESSION['image'] != null)
                    {
                        $photo = $_SESSION['image'];
                    }
                ?>
                <img src="<?php echo $photo?>" class="avatar img-circle img-thumbnail" alt="avatar" id="profile" style="width: 10vw;height: 20vh;">
                
                <!--input for photo-->
                <form action="../Control/include/uploadProfile.php" method="post" class="form" enctype="multipart/form-data">

                    <input type="file" class="text-center center-block file-upload"  id="image" name="profile" accept="image/*">
                    <div class="input-box">
                        <input type="submit" value="Save" class="btn btn-success center-block " style="margin-top: 10px;height: 30px;">
                    </div>
                </form>
            </div>

    <div class="table-content">
        <table>
            <thead>
                <tr>
                    <th>Reservation_Number</th>
                    <th>Vaccine_Name</th>
                    <th>First_does_status</th>
                    <th>First_does_date</th>
                    <th>Second_does_status</th>
                    <th>Second_does_date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num=$_SESSION["number"];
                for ($i = 0; $i < $num; $i++) {?>
                <tr>
                    <th>    <?php echo $_SESSION['reserved'][$i]["Vaccine_id"]?></th>
                    <th>    <?php echo $_SESSION['reserved'][$i]["vaccine_name"]?></th>
                    <th>    <?php echo $_SESSION['reserved'][$i]["first_taken"]?></th>
                    <th>    <?php echo $_SESSION['reserved'][$i]["first_dose_date"]?></th>
                    <th>    <?php echo $_SESSION['reserved'][$i]["second_taken"]?></th>
                    <th>    <?php echo $_SESSION['reserved'][$i]["second_dose_date"]?></th>
                    
                    <?php if( isset($_SESSION['reserved'][$i]["second_taken"]) && $_SESSION['reserved'][$i]["second_taken"] == "true")
                    {?>
                    <th> 
                    

                    <form action="../Control/include/imageWriter.php" method="post">
                        <input name = "vname" type="hidden" value="<?php echo $_SESSION['reserved'][$i]['vaccine_name'];?>">
                        
                            <input type="submit" value="Get Certificate"  class="btn btn-info">
                    </form>
                    
                     </th><?php }?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    
                    
                
</section>


<?php require_once "footer.php" ?>
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
        <h1>All Vaccines</h1>
    </div>
    <div class="table-content">
        <table>
            <thead>
                <tr>
                    <th>Vaccine_Name</th>
                    <th>Gap</th>
                    <th>Description</th>
                    <th>Valid_Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $num=$_SESSION['vaccinesNum'];
                for ($i = 0; $i < $num; $i++) {
                ?>
                <tr>
                    <th><?php  echo $_SESSION['vaccines'][$i]['Name']?></th>
                    <th><?php  echo $_SESSION['vaccines'][$i]['Gap']?></th>
                    <th><?php  echo $_SESSION['vaccines'][$i]['Description']?></th>
                    <th><?php  echo $_SESSION['vaccines'][$i]['Valid_age']?></th>
                    <th><button style="background-color: #ec1d1d; height:25px; border-radius: 25px; outline: none; border: none; width: 100px;" 
                    ><a style="color: aliceblue;" href="../Control/deleteVaccineControl.php?id=<?= $_SESSION['vaccines'][$i]['Vaccine_id']?>">Delete</a></button></th> 
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once "footer.php" ?>
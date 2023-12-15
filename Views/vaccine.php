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
                    <th>Process</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $num=$_SESSION["no"];
                for ($i = 0; $i < $num; $i++) {
                ?>
                <tr>
                    <th><?php  echo $_SESSION['Vaccins'][$i]['Name']?></th>
                    <th><?php  echo $_SESSION['Vaccins'][$i]['Gap']?></th>
                    <th><?php  echo $_SESSION['Vaccins'][$i]['Description']?></th>
                    <th><?php  echo $_SESSION['Vaccins'][$i]['Valid_age']?></th>
                    
                    <th>
                        
                            <a href="../Control/centersControl.php" style="margin: 0 25px; color: blue; font-size: 20px; font-weight: 700;">Reserve</a>
                    </th>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once "footer.php" ?>
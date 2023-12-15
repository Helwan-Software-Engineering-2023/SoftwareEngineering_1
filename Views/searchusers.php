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
        <h1>All Users</h1>
    </div>
    <div class="table-content">
    <div class="table-content">
        <div class="search-bar">
            <form action="../Control/searchuserControl.php" method="POST">
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
                <input type="search" name="date" id="">
                <input type="submit" value="Search">
            </form>
        </div>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Phone Number</th>
                    <th>First dose date</th>
                    <th>Second dose date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $num=$_SESSION["users_number"];
                for ($i = 0; $i < $num; $i++) {
                ?>
                <tr>
                    <th><?php  echo $_SESSION['searched_users'][$i]['reserve_id']?></th>
                    <th><?php  echo $_SESSION['searched_users'][$i]['user_id']?></th>
                    <th><?php  echo $_SESSION['searched_users'][$i]['name']?></th>
                    <th><?php  echo $_SESSION['searched_users'][$i]['phone']?></th>
                    <th><?php  echo $_SESSION['searched_users'][$i]['first_dose_date']?></th>
                    <th><?php  echo $_SESSION['searched_users'][$i]['second_dose_date']?></th>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once "footer.php" ?>
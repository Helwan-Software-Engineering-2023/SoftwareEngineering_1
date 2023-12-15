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
        <table>
            <thead>
                <tr>
                    <th>User_ID</th>
                    <th>User_Name</th>
                    <th>Phone_Number</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num=$_SESSION['usersNum'];
                for ($i = 0; $i < $num; $i++) {
                ?>
                <tr>
                    <th><?php echo $_SESSION['users'][$i]['id'] ?></th>
                    <th><?php echo $_SESSION['users'][$i]['name'] ?></th>
                    <th><?php echo $_SESSION['users'][$i]['phone'] ?></th>
                    <th><?php echo $_SESSION['users'][$i]['address'] ?></th>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once "footer.php" ?>
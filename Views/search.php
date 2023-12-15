<?php

require_once "header.php";
require_once "navbar.php";

?>
<style>
    th {
        height: 60px;
    }
</style>
<section class="container">
    <div class="name-of-page">
        <h1>All Centers</h1>
    </div>
    <div class="table-content">
        <div class="search-bar">
            <form action="../Control/searchControl.php" method="POST">
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
                <input type="search" name="search" id="">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th>City_Name</th>
                        <th>Vaccination_Center Name</th>
                        <th>Phone_Number</th>
                        <th>Address</th>
                        <th>Type</th>
                        <?php if (isset($_SESSION['id'])) {
                            if ($_SESSION['role'] == 'admin') {
                                ?>
                                <th>Action</th>
                            <?php }
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = $_SESSION["searchNum"];
                    for ($i = 0; $i < $num; $i++) { ?>
                        <tr>
                            <th>
                                <?php echo $_SESSION["searched"][$i]["city_name"] ?>
                            </th>
                            <th>
                                <?php echo $_SESSION["searched"][$i]["name"] ?>
                            </th>
                            <th>
                                <?php echo $_SESSION["searched"][$i]["phone"] ?>
                            </th>
                            <th>
                                <?php echo $_SESSION["searched"][$i]["address"] ?>
                            </th>
                            <th>
                                <?php echo $_SESSION["searched"][$i]["type"] ?>
                            </th>
                            <?php if(isset($_SESSION['id'])){
                        if($_SESSION['role']== 'admin'){
                        ?>
                            <th>
                                
                                <button
                                    style="background-color: blue; border: none; border-radius:15px; width: 80px; height: 25px;"><a
                                        style="color: antiquewhite; text-decoration: none;" href="">Update</a></button>
                                <button
                                    style="background-color: red; border: none; border-radius:15px; width: 80px; height: 25px;"><a
                                        style="color: antiquewhite; text-decoration: none;" href="../Control/deleteCenterControl.php?center_id=<?= $_SESSION["centers"][$i]["id"] ?>">Delete</a></button>
                            </th>
                            <?php }
                    }?>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
</section>
<?php require_once "footer.php" ?>
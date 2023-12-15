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
        <h1>All Users</h1>
    </div>
    <div class="table-content">
        <div class="table-content">
            <br>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = $_SESSION["users_info_num"];
                    for ($i = 0; $i < $num; $i++) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $_SESSION['users_Info'][$i]['reserve_id'] ?>
                            </th>
                            <th>
                                <?php echo $_SESSION['users_Info'][$i]['user_id'] ?>
                            </th>
                            <th>
                                <?php echo $_SESSION['users_Info'][$i]['user_name'] ?>
                            </th>

                            <th>
                                <?php if ($_SESSION['users_Info'][$i]['first_taken'] == 'false') { ?>
                                    <button
                                        style="background-color: green; height: 35px; width: 135px; border-radius: 18px; border: none; outline: none; ">
                                        <a style="color: aliceblue;  text-decoration: none;  " href="../Control/CongirmFirstControl.php?id=<?= $_SESSION['users_Info'][$i]['reserve_id']?>">Confirm First
                                            dose</a></button>
                                            <?php } ?>
                                            <?php if ($_SESSION['users_Info'][$i]['second_taken'] == 'false') { ?>
                                                <button
                                    style="background-color: green; height: 35px; width: 135px; border-radius: 18px; border: none; outline: none;">
                                    <a style="color: aliceblue;  text-decoration: none;" href="../Control/ConfirmSecond.php?id=<?= $_SESSION['users_Info'][$i]['reserve_id']?>">Confirm Second
                                        dose</a></button>
                                <?php }
                                ?>
                                <?php if ($_SESSION['users_Info'][$i]['second_taken'] == 'true') { ?>
                                <p>All The Vaccine Dosses Is Completed!</p>
                                    
                                <?php } ?>
                            </th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</section>
<?php require_once "footer.php" ?>
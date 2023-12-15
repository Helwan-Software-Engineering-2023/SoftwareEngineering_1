<header class="header">
    <a href="Main.php" class="site-name">A.S_Vaccine</a>
    <input type="checkbox" id="menu-bar">
    <label class="menu-bar" for="menu-bar"><i class="fa-solid fa-bars"></i></label>
    <nav class="navbar">
        <ul>
            <li><a href="Main.php">Home</a></li>
            <li>
                <a>Account <i class="fa-solid fa-caret-down"></i></a>
                <?php
                session_start();
                if(isset($_SESSION['id'])){
                    ?>
                    <ul>
                        <li><a href="../Control/LogoutController.php">Logout</a></li>
                        <?php
                        if($_SESSION['role'] == 'User'){?>
                        <li><a href="../Control/profileControl.php">My_Profile</a></li>
                        <?php }?>
                    </ul>
                    <?php }else{?>
                        <ul>
                            <li><a href="Login_page.php">Login</a></li>
                            <li><a href="../Control/test.php">Sign Up</a></li>
                    </ul>
                <?php }?>
            </li>
            <?php  
            if(isset($_SESSION['id'])){
                if($_SESSION['role']=='admin'){
            ?>
            <li>
                <a href="Vaccination_center.php">Dashboard <i class="fa-solid fa-caret-down"></i></a>
                <ul>
                    <li>
                        <a href="">Lists <i class="fa-solid fa-caret-right"></i></a>
                        <ul>
                            <li><a href="../Control/AllUsersControl.php">Users_List</a></li>
                            <li><a href="../Control/ListVaccineControl.php">Vaccines_List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Add <i class="fa-solid fa-caret-right"></i></a>
                        <ul>
                            <li><a href="AddCity.php">City</a></li>
                            <li><a href="AddVaccine.php">Vaccine</a></li>
                            <li><a href="../Control/cityControl.php">Center</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <?php }
            }?>
            <?php
            if(isset($_SESSION['id'])){
                if($_SESSION['role']=='User'){
            ?>
            <li><a href="../Control/AllVaccineController.php">Vaccines</a></li>
            <?php }
            elseif($_SESSION['role']== 'vaccination_center'){
            ?>
            <li>
                <a href="">Users <i class="fa-solid fa-caret-down"></i></a>
                <ul>
                    <li><a href="../Control/listCenterUsers.php">All_Users</a></li>
                    <li><a href="../Control/UserInfoControl.php">Users_Info</a></li>
                </ul>
            </li>
            <?php }
            }?>
            <li><a href="../Control/AllCenterController.php">Centers</a></li>
            <!-- Features -->
            <li><a href="Main.php#features">Features</a></li>
            <!-- About Us -->
            <li><a href="Main.php#about">About Us</a></li>
            <!-- Contact Us -->
            <li><a href="Main.php#Contact">Report</a></li>
        </ul>
    </nav>
</header>
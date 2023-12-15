<?php
require_once "navbar.php";
require_once "header.php";
?>
<style>
    /* select{
        width: 200px;
    } */
    .input-field{
        /* position: relative;   */
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
<section class="container">
    <div class="form-pages">
        <h1 class="form-name">Update Vaccine</h1>
        <form action="../Control/UpdateCenterControl.php" method="POST">
            <div class="form-content">
                <div class="input-field">
                    <label for="jobTitle">New Name</label>
                    <input style="text-align: center;" type="text" placeholder="enter the name" name="name">
                </div>
                <div class="input-field">
                    <label for="jobSalary">New Username</label>
                    <input type="text" style="text-align: center;" name="username" placeholder="enter the gap">
                </div>
                <div class="input-field">
                    <label for="jobSalary">New Address</label>
                    <input type="text" style="text-align: center;" name="Address" placeholder="enter the gap">
                </div>
                <div class="input-field">
                    <label for="jobSkills">New Type</label>
                    <Select name="type">200px
                        <option value="private">private</option>
                        <option value="government">government</option>
                    </Select>
                    <br>
                </div>
                <div class="input-field">
                    <label for="jobSkills">New Password</label>
                    <input type="text" style="text-align: center;" name="password" placeholder="enter the valid age">
                    <br>
                </div>
                <div class="input-field">
                    <label for="jobSkills">New Phone Number</label>
                    <input type="text" style="text-align: center;" name="phone" placeholder="enter the valid age">
                    <br>
                </div>
                <div class="input-field">
                    <label for="jobSkills">New city</label>
                    <select name="city" id="">
                    <?php
                    session_start();
                    $num=$_SESSION["admin_city_num"];
                    for($i= 0;$i<$num;$i++){?>
                        <option value="<?php echo $_SESSION["admin_city"][$i]["id"]?>"><?php echo $_SESSION["admin_city"][$i]["name"]?></option>
                        <?php }?>
                    </select>
                    </select>
                    <br>
                </div>
            </div>
            <div class="buttons">
                <input type="submit" value="Update">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</section>
<?php require_once "footer.php" ?>
</body>
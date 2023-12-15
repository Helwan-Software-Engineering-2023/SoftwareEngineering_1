<?php
require_once "navbar.php";
require_once "header.php";
?>
<style>
    select{
        width: 200px;
    }
</style>
<section class="container">
    <div class="form-pages">
        <h1 class="form-name">Reserve Vaccine</h1>
        <form action="../Control/Vaccination.php" method="POST">
            <div class="form-content">
                <div class="input-field">
                    <label for="jobTitle">Vaccine Name</label>
                    <select name="Vaccine_name" id="">
                        <?php
                        $num2=$_SESSION["number2"];
                        for ($i= 0; $i < $num2; $i++){?>
                        <option value="<?php echo $_SESSION["vaccine"][$i]["Vaccine_id"]?>"><?php echo $_SESSION["vaccine"][$i]["Name"]?></option>
                        <?php }?>
                    </select>

                </div>
                <div class="input-field">
                    <label for="jobSalary">Vaccination center</label>
                    <select name="Vaccinatio_center" id="">
                        <?php 
                        $num=$_SESSION["number"];
                        for ($i = 0; $i < $num; $i++) {?>
                        <option value="<?php echo $_SESSION["centers"][$i]["id"] ?>"><?php echo $_SESSION["centers"][$i]["center_name"]?></option>
                        <?php }?>
                    </select>
                    
                </div>
                <div class="input-field">
                    <label for="jobDescription">Type of does</label>
                    <select name="Type_of_dose" id="">
                        <option value="1">First_does</option>
                        <option value="2">Second_does</option>
                    </select>
                </div>
                <div class="input-field">
                    <label for="jobSkills">Date of reservation</label>
                    <input type="date" name="startDate">
                    <br>
                </div>
            </div>
            <div class="buttons">
                <input type="submit" value="Reserve">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</section>
<?php require_once "footer.php" ?>
</body>
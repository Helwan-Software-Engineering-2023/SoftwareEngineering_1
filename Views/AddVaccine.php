<?php
require_once "navbar.php";
require_once "header.php";
?>
<style>
    select{
        width: 200px;
    }
    .input-field{
        position: relative;
        left: 100px;
    }
</style>
<section class="container">
    <div class="form-pages">
        <h1 class="form-name">Add Vaccine</h1>
        <form action="../Control/AddVaccineControl.php" method="POST">
            <div class="form-content">
                <div class="input-field">
                    <label for="jobTitle">Vaccine Name</label>
                    <input type="text" placeholder="enter the name" name="name">
                </div>
                <div class="input-field">
                    <label for="jobSalary">Vaccine Gap</label>
                    <input type="text" name="gap" placeholder="enter the gap">
                </div>
                <div class="input-field">
                    <label for="jobSkills">Description</label>
                    <input type="text" name="description" placeholder="enter the description">
                    <br>
                </div>
                <div class="input-field">
                    <label for="jobSkills">Valid_Age</label>
                    <input type="text" name="age" placeholder="enter the valid age">
                    <br>
                </div>
            </div>
            <div class="buttons">
                <input type="submit" value="Add">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</section>
<?php require_once "footer.php" ?>
</body>
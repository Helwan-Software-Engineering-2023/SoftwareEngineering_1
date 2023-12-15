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
        <h1 class="form-name">Add City</h1>
        <form action="../Control/AddCityControl.php" method="POST">
            <div class="form-content">
                <label style="font-size: 20px;
    font-weight: 700;
    position: relative;
    bottom: 40px;
    left: 162px;
    margin-bottom: 6px;" for="jobDescription" >CityName</label>
                <div class="input-field">
                    <input type="text" name="city">
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
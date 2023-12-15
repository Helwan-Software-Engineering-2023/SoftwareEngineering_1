<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="../assets/signupp.css">
    <script src="../assets/signup.js"></script>
    
</head>
<body>
    <div class="banner">
        <form action="../Control/signupControl.php" class="form1" method="post" onsubmit="return back()">
            
            <br>
            <img src="Hd-Nature-Wallpapers-Amazing-Landscape-Images-Sky-Cool-.jpg" alt="" id="image">
            <fieldset class="form">
                <h1 class="head" id="h1"><a href="/home"><span class="first">R</span>egister</a></h1>
                <label for="username" class="user">User Name</label>
                <br>
                <div class="inputs">
                    <input type="text" name="username" id="username" placeholder="Enter your username" class="one">
                </div>
                <span id="error_user"></span>
                <br>
                <label for="name" class="fname">Name</label>
                <div class="inputs">
                    <input type="text" class="two" id="First" name="name" placeholder="Enter Your Name" required>
                </div>
                <span id="error_name"></span>
                <br>
                <label for="password" class="pass1">Password</label>
                <br>
                <div class="inputs">
                    <input type="password" name="pass1" id="pass" placeholder="Enter the password" class="three">
                </div>
                <span id="error_pass"></span>
                
                <br>
                <label for="pass2" class="password2">Confirm Password</label>
                <div class="inputs">
                    <input type="password" class="four" id="pass2" name="pass2" placeholder="Confirm Your Password"
                    Required>
                </div>
                <span id="error_pass2"></span>
                <br>
                <label for="Address" class="mail">Address</label>
                <div class="inputs">
                    <input type="text" class="five" id="email" name="Address" placeholder="Enter Your Address"
                        Required>
                </div>
                <span id="error_Address"></span>
                <br>
                <label for="phone" class="phone_num">Phone Number</label>
                <div class="inputs">
                    <input type="tel" name="phone" class="six" id="phone" placeholder="+20">
                </div>
                <span id="error_phone"></span>
                <br>
                <label for="id" class="phone_num">National ID</label>
                <div class="inputs">
                    <input type="tel" name="id" class="seven" id="phone" placeholder="Enter Your National_ID">
                </div>
                <span id="error_id"></span>
                <br>
                
                <b><label for="city" class="phone_num">Choose City:</label></b>
                <select name="city" id="">
                    <?php
                    session_start();
                    $num=$_SESSION["num"];
                    for($i= 0;$i<$num;$i++){?>
                        <option value="<?php echo $_SESSION["city"][$i]["id"]?>"><?php echo $_SESSION["city"][$i]["name"]?></option>
                        <?php }?>
                    </select>
                <br>
                <br>
                <div class="inputs">
                    <input type="submit" value="submit" name="submit" id="button" class="btn">
                </div>
                <br>
                <p class="p1">Already have an account? <a href="/signin">Login</a></p>
            </fieldset>
        </form>
    </div>
    <script>check();</script>
    
</body>

</html>
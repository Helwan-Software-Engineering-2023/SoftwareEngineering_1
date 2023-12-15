<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/signin.css">
    <script src="../assets/loginn.js"></script>
</head>

<body>
    <div class="banner">
        <form action="../Control/LoginController.php" class="form1" method="post" onsubmit="return back()">
            
            <br>
            <fieldset class="form">
                <h1 class="head" id="h1"><a href="/home"><span class="first">L</span>ogin Here</a></h1>
                <label for="username" id="user">User Name</label>
                <br>
                <div class="inputs">
                    <input type="text" name="username" id="username" placeholder="Enter your name" class="one">
                </div>
                <span id="error_user"></span>
                <br>
                <br>
                <label for="password" id="password">Password</label>
                <br>
                <div class="inputs">
                    <input type="password" name="password" id="pass" placeholder="Enter the password" class="two">
                    <span id="error_pass"></span>
                    <br>
                </div>
                <input type="submit" onmouseover="" value="Login" id="button" class="three">
                <br>
                <p class="p1">Don't have an account?</p>
                <a href="/signup" class="a1">Regestire Now</a>
            </fieldset>
        </form>
    </div>
    <script>check();</script>

</body>

</html>
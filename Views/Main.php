<?php
require_once "navbar.php";
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <div class="body">
    <div style="background: gray;">
      <section class="container">
        <script>var index = 1;
window.onload = () =>
{
    let ads = document.getElementById("ads");
    setInterval(
        ()=>
        {
            let image = "./assets/images/ads/image";
            let ext = ".jpg";
            if(index >= 1 && index <= 6)
            {
                index++;
            }
            else
            {
                index = 1;
                
            }

            ads.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('"+image+index+ext+"');";
        }
        ,1000);
}</SCRIPT>
        <div id="home" class="all-sections">
          <section class="welcome-section" id='ads'>
            <div class="welcome-text">
              <h1>Welcome;</h1>
              <p>This site introduce to you some avliable vaccination centers that you can go to take your vaccine</p>
            </div>
          </section>
          <section id="features" class="features-section">
            <h2>features</h2>
            <div class="container">
              <div class="feature">
                <span class="icon">
                  <i class="fa-solid fa-user-tie"></i>
                </span>
                <h3>Vaccination-Center</h3>
                <p>Vacinnation Centers is a type of self-employment. Instead
                  of being employed by a company, freelancers tend
                  to work as self-employed, delivering their
                  services on a contract or project basis.</p>
              </div>
              <div class="feature">
                <span class="icon">
                  <i class="fa-solid fa-users"></i>
                </span>
                <h3>User</h3>
                <p>Companies of all types and sizes can hire freelancers
                  to complete a project or a task, but freelancers
                  are responsible for paying their own taxes,
                  health insurance, pension and other personal
                  contributions.</p>
              </div>
            </div>
          </section>
          <section class="about" id="about">
            <h2>About Us</h2>
            <p>
              Welcome in our website!
              Our aim is to help all citizens to get their vaccines in easy way. 
              You can easily see all available cites, their vaccination centers and their information before you sing up.
              Sing up to our website with only your name, age and national id and you can easily reserve your vaccine and get your date to get vaccine.
              You can find all instructions you need to know about vaccines. It is easily to connect with us if you find any problem in website or in vaccination center,
              you can also connect with us if you face any health problem with your vaccine. We hope find you well..</p>
          </section>
          <section id="Contact" class="contactUs-section">
            <div class="form-pages">
              <h2>Report</h2>
              <form action="../Control/Report_vaccine_control.php" method="POST">
                <div class="form-content">
                  <div class="input-field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name">
                  </div>
                  <div class="input-field">
                    <label for="subject">Vaccine_Name</label>
                    <input type="text" id="vaccine" name="vaccine" placeholder="vac-c137">
                  </div>
                  <div class="input-field">
                    <label for="message">Message</label>
                    <textarea  id="message" rows="5" required></textarea>
                    <input name="feedback" type="hidden" id="fd">
                <script>
                    let fd =document.getElementById("message");
                    let form_fd =document.getElementById("fd");
                    
                    fd.oninput = () =>
                    {
                        form_fd.value = fd.value;
                    }
                    
                </script>
                  </div>
                </div>
                <div class="buttons">
                  <input type="submit" value="Send" name="submit">
                  <input type="reset" value="Reset">
                </div>
              </form>
            </div>
            <hr style="height: 5px;background-color: black; border: none; margin: 20px -20;">
            <div class="form-pages">
              <h2>Report</h2>
              <form action="../Control/Report_center_control.php" method="POST">
                <div class="form-content">
                  <div class="input-field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name">
                  </div>
                  
                  <div class="input-field">
                    <label for="subject">Center_Name</label>
                    <input type="text" id="center" name="center" placeholder="center137">
                  </div>
                  <div class="input-field">
                    <label for="message">Message</label>
                    <textarea  id="message2" rows="5" required></textarea>
                    <input name="feedback2" type="hidden" id="fd2">
                <script>
                    let fd2 =document.getElementById("message2");
                    let form_fd2 =document.getElementById("fd2");
                    
                    fd2.oninput = () =>
                    {
                        form_fd2.value = fd2.value;
                    }
                    
                </script>
                  </div>
                </div>
                <div class="buttons">
                  <input type="submit" value="Send" name="submit">
                  <input type="reset" value="Reset" >
                </div>
              </form>
            </div>
          </section>
        </div>
      </section>
    </div>
<?php 
require_once "footer.php";
?>
  </div>
  </body>
</html>
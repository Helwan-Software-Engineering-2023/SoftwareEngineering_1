<?php 
session_start();
include("./DatabaseClass.php");


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == UPLOAD_ERR_OK)
    {
      $imagedir = "../../assets/images/profiles/"; // Specify the target directory

      $targetFile = $imagedir . basename($_FILES["profile"]["name"]);

      // Move the uploaded file to the target directory
      if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) 
      {
         //set image path in session
         $_SESSION['image'] = substr($targetFile,3);
         $sql = "update users set image = '".$_SESSION['image']."' where id = '".$_SESSION['id']."'";
         
         $db = new database();
         $db->update($sql);
         

         $saved = 1;
      } 
      else
        {
           
         $saved = 0;
      }
   } else {
        
      $saved = 0;
   }

   
   //go back to profile page
   header("location: ../../Views/myProfile.php") ;
}



?>
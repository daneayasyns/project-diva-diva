<?php
  $databaseHost = "localhost"; 
  $databaseUser = "root";
  $databasePassword = "";
  $databaseName = "git";
        
      $con=mysqli_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysqli_select_db($con, "git") or die ('Database Error');
      
      $id = $_POST['id'];
      $subj = $_POST['subject'];
      $msg = $_POST['message'];
      
      $query = "INSERT INTO git (id, subject, message)
              VALUES ('$id', '$subj', '$msg')";
      
?>

<html>
<form id="contact_form" action="contact-us.php" method="POST">
	<div class="row">
		<label for="subject">Subject:</label><br />
		<input id="subject" class="input" name="subject" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send" />
</form>
</html>

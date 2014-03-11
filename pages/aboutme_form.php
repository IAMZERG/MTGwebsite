


<?PHP
/* TODO: ADD HEADER AND FOOTER */
?>




	<form name="response" method="post">
		<label for="email">E-mail:</label>
		<input type="text" name="email" id="email"><br><br>
		<label for="email">Reason for contacting me: </label><br>
		<textarea form="response" rows="7" cols="30" id="message"></textarea><br>
		<input type="submit" name="Submit">
	</form>
	




	<?php 
		if ($_SERVER["REQUEST_METHOD"]=="post")  {
		
			/* handle form submission, redirect to thank-you page, save the message OR send me an e-mail */
			$email=$_GET["email"];
			$message=$_GET["message"];
			
			header("Location: contact-thanks.php");

			
			/* TODO: set up email, database, or some other means of saving the messages and the e-mail addresses */
			
	?>
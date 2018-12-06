<html>
	<head>
		<title>Email Confirmation Page</title>
	</head>

	<body>
		<h1>Email Confirmation</h1>
		<?php
			if (isset($_POST["x"])) 
			{
				$sendto = "Lonnie.Goldman@gmail.com";
				echo "<h3>You have <font color='green'>SUCCESSFULLY</font> sent the following email to " . $sendto . ":</h3>";
				$nameUser = $_POST["name"];
				$emailUser = $_POST["email"];
				$phoneUser = $_POST["phone"];
				$subjectUser = $_POST["subject"];
				$messageUser = "From: " . $nameUser . " | Email: " . $emailUser . " | Phone: " . $phoneUser . "\r\n\n" . "MESSAGE: " . $_POST["message"];
				
				echo "<b>Your Name: </b><i>" . $nameUser . "</i><br>";
				echo "<b>Your email address: </b><i>" . $emailUser . "</i><br>";
				echo "<b>Your phone number: </b><i>" . $phoneUser . "</i><br><br>";
				echo "<b>Subject: </b><i>" . $subjectUser . "</i><br><br>";
				echo "<b>Message: </b><i>" . $_POST["message"] . "</i><br><br>";

				mail($sendto, $subjectUser, $messageUser);
				
				$home="<a href='index.html'><img src='images/home_button.png' width=300></a>";
				echo $home;
			}
		?>
	
	</body>
</html>
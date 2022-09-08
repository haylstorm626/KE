<?PHP include('header.txt');?>
	<!--end top-->
	<?php
		// define variables and set to empty values
		$nameErr = $emailErr = "";
		$name = $email = $message = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		  } else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			  $nameErr = "Only letters and white space allowed";
			}
		  }
		  
		  if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  } else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format";
			}
		  }

		  if (empty($_POST["message"])) {
			$message = "";
		  } else {
			$message = test_input($_POST["message"]);
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>
	
	<div class="blok" id="home2" style="background-image:url('img/img4(1).jpg'); ">
	<h6>Contact Us</h6>
	</div>
		
	<div class="blok">
	
		<div class="columns">
		
			
			<div class="column" >
				<h1 style="margin:0px 0px 5px;">Contact Form</h1>
				
					<b style="color:#3b3b3b; margin-bottom:5px;">
					<?php
						if($email!=""){
							$formcontent="From: $name \n Message: $message";
							$recipient = "hknight626@gmail.com";
							$subject = "Message from Knightecc.com";
							$mailheader = "From: $email \r\n";
							mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
							
							echo "Thank you for your message. We'll get back to you soon!";
						}
					?>
					</b>
					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
					  Name: <input type="text" name="name" value="<?php echo $name;?>">
					  <br><br>
					  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
					  <br><br>
					  Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
					  <br>
					  <input type="submit" name="submit" value="Submit">  
					</form>
					
					
			</div>
			
			<div class="column" >
				<p style="padding:0px">
					<b>Knight Electrical Contracting Corp.</b><br><br>
					<b>Office hours:</b><br>
					Monday-Saturday 7am-5pm. <br>
					Please call to confirm. <br>
					Emergency services are available 24/7!<br><br>
					<b>Address:</b><br>
					600 Main Street<br>
					Rowley, MA 01969<br><br>
					<b>Call:</b><br>
					978-377-5200<br><br>
					<b>Email:</b><br>
					info@knightecc.com<br><br>
				</p>
				<div>
					<a href="https://www.facebook.com/knightelectricalcontracting/"><img id="social" src="img/fb.png"></a>
					<a href="https://www.yelp.com/biz/knight-electrical-contracting-haverhill"><img id="social" src="img/yelp.png"></a>
				</div>

			</div>
			<div class="column" >
					
					<img src="img/logo2.png" style="width:90%;" alt="Knight Electrical"><br>
					<img src="img/logo.png" style="width:90%;" alt="Knight Electrical">
			</div>
		
			
		</div>
	</div>
		
	
	<!--start bottom-->
<?PHP include('footer.txt');?>
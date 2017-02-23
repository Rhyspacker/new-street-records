<?php
// Define variables for SEO
$pageTitle = 'Contact | New Street Records';
$pageDescription = '';
$pageKeywords = 'New Street Records, Contact, record label, Manchester, music signing, label';
$pageUrl = "http://newstreetrecords.co.uk/contact">
$dirPath = '../';
include('../includes/header.php');
?>

<?php

	$to = 'mail@newstreetrecords.co.uk';
	$subject = "New Message";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$header = "From: $email - $name";
	$feedback = "";
	$body = "
Name: $name

Email: $email

Subject: $subject

Message: $message ";

	// Post email and change $feedback field based on if

	if($_POST) {
	 if($name == '' || $email == '' || $message == '') {
	     $feedback = "Please fill out all the fields.";
	 }
	      /* If e-mail is not valid show error message */
	 else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	 {
	 $feedback = "Incorrect email address.";
	 }

	 else {
	    mail($to, $subject, $body, $header);
		$feedback = "Thank you, your message has been sent.";
		$hidemydiv = "hide";

	 }
	}

?>

<div class="pageheader-container">

	<div class="pageheader" role="heading">

		<p><a href="../" title="Go to Home">HOME</a> / CONTACT</p>
		<h1>CONTACT</h1>

	</div>

</div>

<main class="flex-container" role="main" id="content">

	<div class="flex-item" >

		<h2>Birmingham</h2>

		<div class="contact-element">

			<a href="tel:077955511**" class="contact-info" title="Our contact telephone number">077955511**</a>

	  </div>

		<div class="contact-element">

			<a href="mailto:mail@newstreetrecords.co.uk" class="contact-info" title="Our contact email address">mail@newstreetrecords.co.uk</a>

		</div>

		<h2>Manchester</h2>

		<div class="contact-element">

			<a href="tel:077955511**" class="contact-info" title="Our contact telephone number">077955511**</a>

	  </div>

		<div class="contact-element">

			<a href="mailto:mail@newstreetrecords.co.uk" class="contact-info" title="Our contact email address">mail@newstreetrecords.co.uk</a>

		</div>

	</div>

	<div class="flex-item" >

		<form method="post">

			<div class="<?php echo $hidemydiv ?>">

				<div class="group">
					<input type="text" id="name" name="name" title="Enter your full name here">
					<label for="name">Name</label>
				</div>

				<div class="group">
					<input type="email" id="email" name="email" title="Enter your email address here">
					<label for="email">Email</label>
				</div>

				<div class="group">
					<select name="subject" id="subject" title="Choose a subject that fits your message">
						<option disabled selected value>&nbsp;</option>
					  <option value=""></option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
					</select>
					<label for="subject">Subject</label>
					<!--<svg class="dropdown-icon">
							<use xlink:href="../img/sprite.svg#dropdown"></use>
					</svg>-->
				</div>

				<div class="group">
					<textarea rows="5" id="message" name="message" title="Enter your message here"></textarea>
					<label for="message">Message</label>
				</div>

	  		<input type="submit" value="Submit" title="Submit your message" />

  		</div>

			<div class="feedback">

			<br>
			<p><?php echo $feedback; ?>	</p>

			</div>

		</form>

	</div>

</main>

<?php include('../includes/footer.php'); ?>

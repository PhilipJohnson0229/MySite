<?php include 'mail_form.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link href="contactForm.css" rel="stylesheet"/>	
	<link href="layout.css" rel="stylesheet" /> 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="main.css" rel="stylesheet"/>
	
  </head>
  <body>

	<header>   
		<img src="jbc_logo.png" alt="jax bread company" />
		<nav role="navigation">
		  <ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="Resume.html">Resume</a></li>
			<li><a href="#">Portfolio</a>
			  <ul class="dropdown">
				<li><a href="https://github.com/PhilipJohnson0229">Github</a></li>
				<li><a href="FSCJ_Fall2020_StudentWork_Showcase.html">Web Dev</a></li>
				<li><a href="#">Game Dev</a></li>
				<li><a href="#">Animation</a></li>
			  </ul>
			</li>
			<li><a href="#">Contact</a></li>
		  </ul>
		</nav>
		
   </header>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
	<div id="contactBody">
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-envelope"></i><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=someone@gmail.com" target="philip.johnson0229@gmail.com" style="color: white;">Gmail</a></div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Send me a message!</h2>
        <form class="contact" action="" method="post">
          <input id="resetForm" type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input id="resetForm" type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea id="resetForm" name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" onclick="return Sent();" class="send-btn" value="Send">
        </form>
      </div>
    </div>
	</div>
	<br><br><br><br>
    <!--contact section end-->

	<footer>
	<a href="https://www.facebook.com/philip.johnson.167" class="fa fa-facebook"></a>
	<a href="mailto: philip.johnson0229@gmail.com" class="fa fa-google"></a>
	<a href="#" class="fa fa-linkedin"></a>
	<a href="https://www.youtube.com/channel/UC8vyoo3uNz8QXFcrwqaEwJw" class="fa fa-youtube"></a>
	</footer>
	
    <script type="text/javascript">


	function Sent() {
		return confirm('Thank you! Your Email has been sent!');
		this.form.reset();
		alert("trying");
	}
	
    
    </script>

  </body>
</html>
                           
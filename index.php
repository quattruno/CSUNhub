

<!DOCTYPE html>
<html>
<head>
<title>Log In Page</title>
		<link rel = "stylesheet" href="styles.css">
</head>
<body>
	

	<div class ="login-page">
	<div class ="form">
		<form class ="register-form" action="includes/signup.inc.php" method="POST">
			<input type ="text" name="uid" placeholder ="Username"/>
			<input type ="password" name="pwd" placeholder = "Password"/>
				<input type ="text" name="email" placeholder = "Email"/>
				<button type="submit" name="submit">Create</button>
				<p class="message"> Already Registered? <a href="#"> Log In</a></p>
		</form>

		<form class ="login-form">
			<input type ="text" placeholder = "Username"/>
			<input type ="text" placeholder = "Password"/>
			<button> Log In</button>
			<p class = "message"> Not Yet Registered? <a href ="#">Register</a></p>
		</form>

	</div>
	</div>

	<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
	<script>
		$('.message a').click(function(){
		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>
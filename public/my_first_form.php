<?php

var_dump($_GET);
var_dump($_POST);

?>

<<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="User Name">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="password">
	    </p>
	    <p>
	    	<label for="address">Address</label>
	    	<input id="address" name="address" type="text" placeholder="123 Main Street">
	    </p>
	    <p>
	    	<label for="phone">Phone</label>
	    	<input id="phone" name="phone" type="text" placeholder="(210)555-1234">
	    </p>
	    <p>
	        <input type="submit" value="Login">
	        <!-- <button type="submit">Login</button> -->
	    </p>
	</form>
	<h2>Compose an Email</h2>
	<form method="POST" action="/my_first_form.php">
		<p>
			<label for="To">To</label>
			<input id="To" name="To" type="text" placeholder="JohnSmith@altavista.com">
		</p>
		<p>
			<label for="From">From</label>
			<input id="From" name="From" type="text" placeholder="JohnDoe@aol.com">
		</p>
		<p>
			<label for="Subject">Subject</label>
			<input id="Subject" name="Subject" type="text" placeholder="Subject">
		</p>
		<p>
			<label for="Body">Body</label>
	    	<textarea id="Body" name="Body" placeholder="Enter text here" rows="5" cols="40"></textarea>
		</p>
		<p>
			<label for="Email Copy">Email Copy</label>
			<input type="checkbox" id="Email Copy" name="Email Copy" value="yes" checked>
			<label for="Email Copy">Save me a copy of the Email</label>
		</p>
		<p>
			<input type="submit" value="Send">
		</p>
	</form>
	<h2>Multiple Choice Test</h2>
	<form method="POST" action="/my_first_form.php">
		
		<!-- <p>We all know that the moon is not made of green cheese, but what if it were made of barbeque spare ribs, would you eat it then??</p>
		<label>
			<input type="radio" id=q1a name=q1 value="Of Course">
			Of Course<br>
		</label>
		<label>
			<input type="radio" id=q1b name=q1 value="Yeah, probably">
			Yeah, probably<br>
		</label>
		<label>
			<input type="radio" id=q1c name=q1 value="No, I'm weird">
			No, I'm weird<br>
		</label> -->
		
		<p>What is the greatest basketball team in history?</p>
		<label>
			<input type="radio" id=q2a name=q2 value="'98-'99 San Antonio Spurs">
			'98-'99 San Antonio Spurs<br>
		</label>
		<label>
			<input type="radio" id=q2b name=q2 value="'02-'03 San Antonio Spurs">
			'02-'03 San Antonio Spurs<br>
		</label>
		<label>
			<input type="radio" id=q2c name=q2 value="'04-'05 San Antonio Spurs">
			'04-'05' San Antonio Spurs<br>
		</label>
		<label>
			<input type="radio" id=q2d name=q2 value="'06-'07 San Antonio Spurs">
			'06-'07 San Antonio Spurs<br>
		</label>
		<label>
			<input type="radio" id=q2e name=q2 value="'13-'14 San Antonio Spurs">
			'13-'14 San Antonio Spurs<br>
		</label>

		<label for="player">Who is your favorite basketball player of all time?</label>
		<select id="player" name="player[]" multiple>
			<option value="Duncan">Tim Duncan</option>
			<option value="Parker">Tony Parker</option>
			<option value="Ginobili">Manu Ginobili</option>
			<option value="Robinson">David Robinson</option>
			<option value="Johnson">Avery Johnson</option>
			<option value="Elliot">Sean Elliot</option>
			<option value="Bonner">Matt Bonner</option>
		</select>


		<p>
			<input type="submit" value="Go Spurs">
		</p>
	</form>
	<h2>Select Testing</h2>
	<form>
		<label for="moon">We all know that the moon is not made of green cheese, but what if it were made of barbeque spare ribs, would you eat it then??</label>
		<select id="moon" name="moon">
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>
		<p>
			<input type="submit" value="Submit"
		</p>
	</form>
</body>
</html>













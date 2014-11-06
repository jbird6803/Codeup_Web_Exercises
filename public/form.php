<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<<!-- form>
		<input type="email" placeholder="email text">
		<input type="submit">
	</form> -->

<?php var_dump($_POST);
?>

	<form method="POST" action="./form.php">
		<<!-- p>
			<input type="text" name="first_name" id="first_name" placeholder="Input name" value="Jason">
		</p>
		<p>
			<label for="mailing_list">
			    <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
			    <label for="mailing_list">Sign me up for the mailing list!</label>
			</label>
		</p>
	
		<p>What operating systems have you used?</p>
		<p>
			<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
			<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
			<label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>
		</p>

		<p>What is the capital of Texas?</p>
			<label>
			    <input type="radio" id="q1a" name="q1" value="houston">
			    Houston
			</label>
			<label>
			    <input type="radio" id="q1b" name="q1" value="dallas">
			    Dallas
			</label>
			<label>
			    <input type="radio" id="q1c" name="q1" value="austin">
			    Austin
			</label>
			<label>
			    <input type="radio" id="q1d" name="q1" value="san antonio">
			    San Antonio
			</label>

		<input type="submit" value="Login"> -->

		<label for="transmission">Select your transmission type: </label>
		<select id="transmission" name="transmission">
		    <option>Automatic</option>
		    <option>Manual</option>
		</select>
		<br>

		<label for="os">What operating systems have you used? </label>
		<select id="os" name="os[]" multiple>
		    <option value="linus">Linux</option>
		    <option value="osx">OS X</option>
		    <option value="windows">Windows</option>
		</select>
		<br>

		<input type="submit">
	</form>

</body>
</html>
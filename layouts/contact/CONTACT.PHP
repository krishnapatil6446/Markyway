<?php include "sendmail.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form</title>
	<style>
	body {
		font-family:"Open Sans", Helvetica, Arial, sans-serif;
		line-height: 1.5;
	}
	.container {
		max-width:500px;
		width:100%;
		margin:0 auto;
	}
	form{
		width: 100%;
	}
	label{
		font-weight: bold;
		margin-bottom: 10px;
	}
	input, textarea {
		font-family:"Open Sans", Helvetica, Arial, sans-serif;
		width:100%;
		border:1px solid #CCC;
		background:#FFF;
		margin:0 0 5px;
		padding:10px;
	}
	fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		padding: 0;
		width: 100%;
	}
	button{
		cursor:pointer;
		width: 100%;
		border:none;
		background:rgb(3, 153, 212);
		color:#FFF;
		margin:0 0 5px;
		padding:10px;
		font-size:15px;
	}
</style>
</head>
<body>

	<div class="container">
		<h1>Contact Form</h1>
		<form method="post">
			<fieldset>
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Name">
			</fieldset>
			<fieldset>
				<label>Mobile</label>
				<input type="text" name="mobile" placeholder="Enter Mobile">
			</fieldset>
			<fieldset>
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email">
			</fieldset>
			<fieldset>
				<label>Message</label>
				<textarea name="message" placeholder="Type your Message..."></textarea>
			</fieldset>
			<fieldset>
				<button type="submit" name="submit">SUBMIT</button>
			</fieldset>
		</form>
	</div>

</body>
</html>
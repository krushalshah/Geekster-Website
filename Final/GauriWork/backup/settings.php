﻿<html>
<?php 
    include "scribble.php";
    
?>
<head>
<title></title>
<link rel="stylesheet" href="settings.css">
</head>
<body>
<div class="container">
	<h2> GEEKSTER </h2>
	<h3>ADD YOUR DATA</h3>
	
	<?php foreach($query1 as $q){?>
	<form action="#" name="contact_form">
		<label for="first_name">First Name</label>
		<input name="first_name" type="text" value= "<?php echo $q["first_name"];?>" required/>
		<br>
		<label for="last_name">Last Name</label>
		<input name="last_name" type="text" value= "<?php echo $q["last_name"];?>" required />
		<br>
		<label for="username">Username</label>
		<input name="username" type="text" value= "<?php echo $q["username"];?>" required />
		<br>
		<label for="email">Email</label>
		<input name="email" type="email" value= "<?php echo $q["email"];?>" required />
		<br>
		<label for="bio">BIO</label><br>
		<textarea name="bio" cols="30" rows="10"><?php echo $q["bio"];?>"</textarea>
		<br>
		<label for="url">URL</label>
		<input name="url" type="text" value= "<?php echo $q["user_image"];?>" required />
		<div class="center">
			<input type="submit" value="save" name="save">
		</div>
	</form>	
	<?php } ?>
</div>
</body>
</html>
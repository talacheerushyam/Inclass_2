<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"/>

<html>
<head>
<title>Welcome Page</title>
<link rel="stylesheet" type="text/css" href="Handleform.css"/>
<?php 
$title = $fname = $mname = $faname = $address = $age=  "";

$title = trim($_POST['title']);
$fname = trim($_POST['first_name']);
$mname = trim($_POST['middle_name']);
$faname = trim($_POST['family_name']);
$address = trim($_POST['address']);
$age = trim($_POST['age']);

?>
</head>
<body>
	<form action="" method="GET">
	<p class="Output">
		Hello <?php echo $_POST['title']." ". $_POST['first_name'] ." " .$_POST['middle_name'] ." ".$_POST['family_name'].", lives at ".$_POST['address']?>
		<br/>
		<?php echo 'you will be '.(2017 - $_POST['age'])." " ."this year"?>
	</p>
	</form>
</body>
</html>

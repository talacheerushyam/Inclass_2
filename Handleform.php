<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>Welcome Page</title>
<link rel="stylesheet" type="text/css" href="Handleform.css"/>
<?php 
$title = $fname = $mname = $faname = $address = $yob=  "";

$title = trim($_POST['title']);
$fname = trim($_POST['first_name']);
$mname = trim($_POST['middle_name']);
$faname = trim($_POST['family_name']);
$address = trim($_POST['address']);
$yob = trim($_POST['yob']);

?>
</head>
<body>
	<form action="" method="GET">
	<p class="mainP">
		Hello <?php echo $_POST['title']." ". $_POST['first_name'] ." " .$_POST['middle_name'] ." ".$_POST['family_name']." ".$_POST['address']?>
		<br/>
		<?php echo 'you will be '.(2017 - $_POST['yob'])." " ."this year"?>
	</p>
	</form>
</body>
</html>

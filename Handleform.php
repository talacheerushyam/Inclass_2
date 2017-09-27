<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        
        <title>In Class Exercise</title>
        
        <link rel="stylesheet" href="Handleform.css" type="text/css" />
        
    </head>
    <body>
        <?php
        $title = $_POST['title'];
        $firstname = $_POST['firstname'];
        $middlename=$_POST['middlename'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $birthyear = $_POST['birthyear'];
        $thisyear = date(Y);
        $age = $thisyear - $birthyear;

        print '<p>"Hello ' . "$title $firstname $midlename $surname" . ', lives at ' . "$address\".</p>";
        
        print '</p>You are ' . "$age" . ' this year.</p>';
			
			?>

    </body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<h1>SUCCESS</h1>
<p><a href="Login/logout"><i class="fa fa-power-off"></i>Log Out</a></p>
<?php 
foreach($record as $row)
      {
	 echo $row->No;
    echo $row->username;
	echo $row->Name;
  echo $row->Gender;
  echo $row->email;
  echo $row->dob;
  echo $row->YearofJoining;
  echo $row->Type;
      }
      ?>
</body>
</html>>
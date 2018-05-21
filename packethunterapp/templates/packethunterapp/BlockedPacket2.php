<!DOCTYPE html>
<html>
<head>
	<title>team 6 graduation works</title>
	<meta charset="utf-8">
</head>
<body>
<?php

$conn = mysql_connect("localhost", "packethunter", "packethunter");
$db=mysql_select_db("packethunter",$conn);

if($db)
 echo "db connect";
else
 echo "db disconnect";

$sql="select * from BlockLog";
$sql_result=mysql_query($sql, $conn);

$count=mysql_num_rows($sql_result);
echo $count;
?>
</html>

<html>
<head>
<title> team 6 graduation works </title>
</head>

<body bgcolor="black">

<?
$connect=mysql_connect("localhost", "packethunter", "packethunter") or die("Unable to connect to SQL server");

$db=packethunter;
if(!$db)
{
$dblist=mysql_listdbs();
$dbnum=mysql_num_rows($dblist);

for($i=0;$i<$dbnum;$i++)
{
$dbname[$i]=mysql_dbname($dblist,$i);
}

if(($db&&$table))
{

mysql_select_db("$db");
$result=mysql_query("SELECT * FROM $table");
$fields=mysql_num_fields($result);
$rows=mysql_num_rows($result);

echo"
<table width=94% border cellpadding=2 cellspacing=0> </table>";

mysql_close();
?>
<br>
<P>
<a href=PacketHunter.php></a>
</body>
</html>

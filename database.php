<html>
<head>
<title>database</title>
<style type="text/css" media="all">
body{
background:gray;
}
p{

font-size:20px;
color:00ffff;
font-family:monospace;
}
</style>
</head>
<body>
<?php

function db()
{
global $con;
$con=mysql_connect("mysql14.000webhost.com","a3883268_naveen",Oms1ir1m);
mysql_select_db("a3883268_webpage",$con);
}
function insert()
{
global $con,$ram;
if($ram!="1")
{
db();
$sql="insert into chatapp values('$_POST[username]','$_POST[sex]','$_POST[password]','on','1')";
$result=mysql_query($sql,$con);
echo "<p>YOUR ACCOUNT HAS BEEN CREATED</p><br>";
$sqla="create table $_POST[username](sender varchar(15),message text)";
$result=mysql_query($sqla,$con);

echo "<p><a href=\"log.html\">click here to login</a></p>";
}
else
{
echo "<p>THERE IS ALREADY AN ACCOUNT IN THIS NAME</p>";
echo "<p><a href=\"new.html\">click here to sign up with different name</a></p>";
}
}
function check()
{
global $con,$ram;
db();
$sql="select * from chatapp";
$result=mysql_query($sql,$con);
while($define=mysql_fetch_array($result))
{
if($define['username']==$_POST[username])
{
$ram="1";
break;
}
}
}
check();
insert();
?>
<br>
</body>
</html>
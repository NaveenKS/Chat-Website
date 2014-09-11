<html>
<head>
<title>logout</title>
<head>
<style type="text/css" media="all">
body{
background:gray;
}
p{
border:3px inset black;
letter-spacing:5px;
text-transform:uppercase;
text-align:center;
background:lightgray;
margin:30px;

}
h1{
font-family:monospace;
letter-spacing:5px;
text-align:center;
color:00ffff;
font-size:30px;
}
</style>
</head>
<body>

<?php
session_start();
function db()
{
global $con;
$con=mysql_connect("mysql14.000webhost.com","a3883268_naveen",Oms1ir1m);
mysql_select_db("a3883268_webpage",$con);
}
function logout()
{
$id=session_id();
global $con,$user;
db();
$sql="select * from chatapp";
$result=mysql_query($sql,$con);
while($array=mysql_fetch_array($result))
{
if($array['sessionid']==$id)
{
$user=$array['username'];

}
}
$sql="update chatapp set status='off' where username='$user'";
mysql_query($sql,$con);
echo "<p>YOU HAVE SUCCESSFULLY LOGGED OUT</p><br>";
}
logout();
?>
<a href="log.html"><p>click here to login again</p></a>
</body>
</html>
<html>
<head>
<title>log.php</title>
<style type="text/css" media="all">
body{
background:gray;
}
h1{
border:5px double black;
font-family:monospace;
color:00ffff;
text-transform:uppercase;
letter-spacing:10px;
text-decoration:blink;
margin:10px 450px;
width:400px;
padding:10px;
-moz-border-radius:20px;
background:orange;
}
p{
border:3px inset black;
letter-spacing:5px;
text-transform:uppercase;
text-align:center;
background:lightgray;
margin:30px;
}
a:hover{
font-size:25px;
color:red;
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
function check()
{
global $con,$ram;
db();
$sql="select * from chatapp";
$result=mysql_query($sql,$con);
while($array=mysql_fetch_array($result))
{
if($array['username']==$_POST[username] && $array['password']==$_POST[password])
{
$ram="1";
$_SESSION['user']=$_POST['username'];
//echo $_SESSION['user'];
echo "<h1>WELCOME  ".$array['username']."<br></h1>";

echo "<p>SEX: ".$array['sex']."<br></p>";
echo "<br><a href=\"chat.php\"><p>CHAT</p></a></b><br><br>";
echo "<a href=\"inbox.php\"><p>INBOX</p></a><br>";

$sql="update chatapp set status='on' where username='$_POST[username]'";
mysql_query($sql,$con);
$id=session_id();
$sql="update chatapp set sessionid='$id' where username='$_POST[username]'";
mysql_query($sql,$con);
echo "<br><a href=\"logout.php\"><p>LOGOUT</p></a>";
break;
}
}
}
check();
global $ram;
if($ram!="1")
{
echo "<br><b>USERNAME OR PASSWORD IS WRONG<b>\n";
echo "<a href=\"log.html\">click here to enter your password again</a>";
}

?>

</body>
</html>
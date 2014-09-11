<html>
<head>
<title>chat.html</title>
<style type="text/css" media="all">
body{
background:gray;
}
div#demo{
margin:10px;
border:5px outset black;
overflow:scroll;
height:400px;
padding:10px;
margin:10px;
-moz-border-radius:20px;
}
input[name='reciever']{
border:5px double black;
}
textarea[name]
{
border:5px double black;
}
p{
font-family:monospace;
color:00ffff;
font-size:20px;
}
a{
color:red;
}
h1{
font-size:20px;
font-family:monospace;
letter-spacing:5px;
color:00ffff;
}
textarea{
color:darkblue;
}
input{
color:darkblue;
}
</style>
<?php
session_start();
$sender=$_SESSION['user'];
function db()
{
global $con;
$con=mysql_connect("mysql14.000webhost.com","a3883268_naveen",Oms1ir1m);
mysql_select_db("a3883268_webpage",$con);
}
function send()
{
$id=session_id();
global $con,$sender;
db();
$sql="insert into $_POST[reciever] values ('$sender','$_POST[message]')";
$result=mysql_query($sql,$con);
}
send();
?>
<script type="text/javascript">

function xmldoc()
{
/*c=c+1;
document.getElementById("count").innerHTML=c;
*/
if (window.XMLHttpRequest)
{
xml=new XMLHttpRequest();
}

xml.onreadystatechange=function()
{
if(xml.readyState==4 && xml.status==200)
{
document.getElementById("demo").innerHTML=xml.responseText;
}
}

xml.open("GET","data.php",true);
xml.send();
t=setTimeout("xmldoc()",1000);
}
xmldoc();
</script>

</head>

<body>

<div id="demo"></div>

<div class="box">
<form action="chat.php" method="POST">
<input type="text" name="reciever"></input>
<textarea type="text" name="message" rows="5" cols="160"></textarea>

<input type="submit" value="send"></input>
</form>
</div>

<a href="logout.php">LOGOUT</a>
</body>
</html>

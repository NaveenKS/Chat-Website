<?php
session_start();
global $sender;


//echo "naveen";
global $con;
function db()
{
global $con;
$con=mysql_connect("mysql14.000webhost.com","a3883268_naveen",Oms1ir1m);
mysql_select_db("a3883268_webpage",$con);
}
function s()
{
global $con,$sender;
db();
$sender=$_SESSION['user'];
$sql="select * from $sender";
$result=mysql_query($sql,$con);
//echo $result;
while($r=mysql_fetch_array($result))
{
echo $r['sender']."->".$r['message']."<br>";
}

}
s()
?>
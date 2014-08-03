<?php
include 'config.php';
$query=mysql_fetch_array(mysql_query("SELECT `userid` FROM `users` ORDER BY `id` DESC LIMIT 1"));
$id=$query['userid'];
$actual_id=substr($id,3);
if(isset($_GET['gcm']))
{
$gcm=$_GET['gcm'];
$idtouse="wat".($actual_id+1);
$res=mysql_query("INSERT INTO `users`(`userid`,`url`) VALUES('$idtouse','$gcm')");
if($res)
echo "success,".$idtouse;
else
echo "failed";
}
else
echo "no post";
?>
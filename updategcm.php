<?php
include 'config.php';
if(isset($_GET['gcm']) && isset($_GET['userid']))
{
$gcm=$_GET['gcm'];
$id=$_GET['userid'];
$actual_id=substr($id,3);
$res=mysql_query("UPDATE `users` SET `url`='$gcm'");
if($res)
echo "success";
else
echo "failed";
}
else
echo "no post gcm";
?>
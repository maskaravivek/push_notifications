<?php
include 'windowsphonepush.php';
$uri="http://s.notify.live.net/u/1/sin/HmQAAABAOXVyyrWDV9Dtl_SsaqW35IzNLuBCYXxH1GLcFXXOOjnTs2_b1m3Rg1IFNiREguV1p-vDl3bYr32YFu_EBTqR/d2luZG93c3Bob25lZGVmYXVsdA/3rWv15yWiEOeql6HRIwAKg/qisg5QHYUnoA40us-EYqtJbfeV0"; //uri sended by Microsoft plateform
$notif=new WindowsPhonePushNotification($uri);
$notif->push_toast("this is a title","this is the sub title");
?>
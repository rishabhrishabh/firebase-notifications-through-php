<?php

require "init.php";
$message=$_POST['message'];
$title=$_POST['title'];
$path_to_fcm='https://fcm.googleapis.com/fcm/send';
$server_key="AAAA49QB3Lo:APA91bFt_0nk-p1Z1HQMhj61uE4BKUBrW8QyiGYKnRtkbRAwNLe1sjiw51VayCiEf9H9eLba3MLghb9HIrBGGkCtfrCMP7L9k550-bGc_mWaXRDQgu-dRDZuBnz49ZI4o7gKtUzCjJTi";
$sql="select fcm_token from fcm_info";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
$key=$row[0];





?>
<?php
$to = "shobhit.khurana2015@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: shobdragon@gmail.com" . "\r\n";
mail($to,$subject,$txt,$headers);
echo "success"
?>
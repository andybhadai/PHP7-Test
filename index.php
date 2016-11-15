<?php

require("Classes/FTP.php");

$ftp = new FTP("www.google.com", "Andy", "Andy");
echo $ftp->DisplayConnectionStatus();
?>
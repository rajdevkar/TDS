<?php
include '../db/config.php';
 
$conn = OpenCon();
 
echo "Connected Successfully";
 
CloseCon($conn);

?>
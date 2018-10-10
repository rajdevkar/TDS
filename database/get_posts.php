<?php 

$sql = "SELECT title FROM post";
$result = $db->query($sql);
$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row["title"];
?>
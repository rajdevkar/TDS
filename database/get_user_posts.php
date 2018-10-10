<?php 
$userid = $_SESSION["id"];
$sql = "SELECT title FROM post where author_id = $userid";
$result = $db->query($sql);
$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row["title"];
?>
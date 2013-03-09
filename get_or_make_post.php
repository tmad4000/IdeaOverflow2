<?php
require_once('mysql.php');

$body = mysqli_real_escape_string($MYSQLI_LINK, htmlspecialchars($_REQUEST['newpost']));
$time = time();

$ideastbl = IDEAS_TBL;

if (!empty($body)) {
    $query = "INSERT INTO $ideastbl VALUES ('', $time, '$body', '')";
    $result = mysqli_query($MYSQLI_LINK, $query) or die("INSERT Error: " . mysqli_error($MYSQLI_LINK));
}

$query = "SELECT * FROM $ideastbl ORDER BY time DESC";
$result = mysqli_query($MYSQLI_LINK, $query) or die("SELECT Error: " . mysqli_error($MYSQLI_LINK));

$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows []= $r;
}
print json_encode($rows);
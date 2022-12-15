<?php
$mysqli = new mysqli("localhost", "root", "", "so_suc_khoe_dien_tu");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, gia_thanh
FROM vacxin WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $gia_thanh);
$stmt->fetch();
$stmt->close();

echo $gia_thanh;
?>

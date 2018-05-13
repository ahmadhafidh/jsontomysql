<?php
$db = new PDO('mysql:host=localhost;dbname=skripsiatin','root','');
$jsondata = file_get_contents('coba.json');

$data = json_decode($jsondata, true);
echo "<pre>";
print_r($data);
echo "</pre>";

$insert = $db->prepare("insert into bencanaalam values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

foreach ($data as $key) {
	$insert->bindParam(1, $key['type']['features'][0]['geometry']['type']);
	$insert->bindParam(2, $key['coordinates']);
	$insert->bindParam(3, $key['properties']['osm_id']);
	$insert->bindParam(4, $key['properties']['aeroway']);
	$insert->bindParam(5, $key['properties']['amenity']);
	$insert->bindParam(6, $key['properties']['bridge']);
	$insert->bindParam(7, $key['properties']['building']);
	$insert->bindParam(8, $key['properties']['capacity']);
	$insert->bindParam(9, $key['properties']['highway']);
	$insert->bindParam(10, $key['properties']['layer']);
	$insert->bindParam(11, $key['properties']['name']);
	$insert->bindParam(12, $key['properties']['oneway']);
	$insert->bindParam(13, $key['properties']['operator']);
	$insert->bindParam(14, $key['properties']['parking']);
	$insert->bindParam(15, $key['properties']['public_tra']);
	$insert->bindParam(16, $key['properties']['railway']);
	$insert->bindParam(17, $key['properties']['smoothness']);
	$insert->bindParam(18, $key['properties']['surface']);
	$insert->bindParam(19, $key['properties']['tunnel']);
	$insert->bindParam(20, $key['properties']['width']);
	$insert->bindParam(21, $key['properties']['z_index']);
	$insert->execute();
}
?>
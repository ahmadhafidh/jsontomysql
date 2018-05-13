<?php
//koneksi untuk insert ke table tbl_bencana untuk insert coordinates
include 'koneksi.php';

//koneksi untuk insert ke table tbl_bencana tanpa insert coordinates
$db = new PDO('mysql:host=localhost;dbname=jsontomysql','root','');

//get lokasi file json 
$jsondata = file_get_contents('http://localhost/jsontomysql/coba.json');

//merubah file json ke index array 
$data = json_decode($jsondata, true);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

//query insert untuk insert ke tbl_bencana alam tanpa coordinates
$insert = $db->prepare("insert into tbl_bencanaalam values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

//perulangan untuk looping data yang di perlukan untuk insert ke tbl_bencanaalam
foreach ($data['features'] as $key) {

// echo "<pre>";
// 	print_r($key);
// echo "</pre>";

	$osm_id = $key['properties']['osm_id'];
	$insert->bindParam(1, $key['geometry']['type']);
	// $insert->bindParam(2, $key['geometry']['coordinates'][0][0]);
	$insert->bindParam(2, $key['properties']['osm_id']);
	$insert->bindParam(3, $key['properties']['aeroway']);
	$insert->bindParam(4, $key['properties']['amenity']);
	$insert->bindParam(5, $key['properties']['bridge']);
	$insert->bindParam(6, $key['properties']['building']);
	$insert->bindParam(7, $key['properties']['capacity']);
	$insert->bindParam(8, $key['properties']['highway']);
	$insert->bindParam(9, $key['properties']['layer']);
	$insert->bindParam(10, $key['properties']['name']);
	$insert->bindParam(11, $key['properties']['oneway']);
	$insert->bindParam(12, $key['properties']['operator']);
	$insert->bindParam(13, $key['properties']['parking']);
	$insert->bindParam(14, $key['properties']['public_tra']);
	$insert->bindParam(15, $key['properties']['railway']);
	$insert->bindParam(16, $key['properties']['smoothness']);
	$insert->bindParam(17, $key['properties']['surface']);
	$insert->bindParam(18, $key['properties']['tunnel']);
	$insert->bindParam(19, $key['properties']['width']);
	$insert->bindParam(20, $key['properties']['z_index']);
	$insert->execute();

	//perulangan untuk looping data cordinates perindex array
	foreach ($data['features'][0]['geometry']['coordinates'] as $key) {
// echo "<pre>";
// 	print_r($key);
// echo "</pre>";
		$coordinates[] = $key;

	}
	//perulangan untuk looping data cordinates perindex array
	for ($i=0; $i<count($coordinates); $i++) { 
		$a =$coordinates[$i][0];
		$b =$coordinates[$i][1];

		$insert2="INSERT INTO tbl_coordinates SET coordinates__long='$a', coordinates__lat='$b', osm_id='$osm_id'";
		mysqli_query($conn, $insert2);

	}
}

// echo "<pre>";
// print_r($coordinates);
// echo "</pre>";

?>
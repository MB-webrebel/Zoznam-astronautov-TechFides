<?php
$data = json_decode( file_get_contents( 'data.json' ), true );

$date = "";
foreach (explode('-', $_POST["born"]) as $item) {
	$date = intval($item) . '. ' . $date;
}

$newPerson = array("name" => $_POST["name"], "surname" => $_POST["surname"], "born" => substr($date, 0, -2), "superpower" => $_POST["superpower"]);

array_push($data, $newPerson);

$fp = fopen( 'data.json', 'w' );
fwrite( $fp, json_encode( $data ) );
fclose( $fp );

header( 'Location: /Astronauts-TechFides' );
die();

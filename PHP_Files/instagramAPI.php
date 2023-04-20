<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://instagram-bulk-profile-scrapper.p.rapidapi.com/clients/api/ig/ig_profile?ig=lawrencetechuniversity&response_type=short&corsEnabled=false",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: instagram-bulk-profile-scrapper.p.rapidapi.com",
		"X-RapidAPI-Key: 1749c6652amsh88cfcf931275d40p158a2ejsna7f76dacfce0"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>

// this pulls data!!! just update the CURLOPT_URL
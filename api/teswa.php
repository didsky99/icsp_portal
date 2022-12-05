<?php
$data = [
			'api_key' => '56fd7f386d168af13ad9c0658087b8865b9d750e',
			'sender'  => '62813333111933',
			'number'  => $whatsapp,
			'message' => $pesan2
		];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://nakula.waway.id/api/send-message.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => json_encode($data)));

		$response = curl_exec($curl);

echo $response;

		curl_close($curl);
?>
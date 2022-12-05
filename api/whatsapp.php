<?php
$data = [
			'api_key' => $apikey,
			'sender'  => $sender,
			'number'  => $whatsapp,
			'message' => $message
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

		curl_close($curl);
?>
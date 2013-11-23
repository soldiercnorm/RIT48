<?php

	class YelpData 
	{
		function __construct()
		{
			# code...
		}

		public function getData(){
			
			// Enter the path that the oauth library is in relation to the php file
			require_once ('OAuth.php');

			// For example, request business with id 'the-waterboy-sacramento'
			//$unsigned_url = "http://api.yelp.com/v2/business/the-waterboy-sacramento";

			// For examaple, search for 'tacos' in 'sf'
			$unsigned_url = "http://api.yelp.com/v2/search?term=plumbing&location=ny";


			// Set your keys here
			$consumer_key = "s2S-1en4CfXyNePrH-w50g";
			$consumer_secret = "vN1kDbFoiHvl2W6YCJXEwgHudY0";
			$token = "HpxxZqHs_7D2-QNU-kpzUcNIYEy9Xfdy";
			$token_secret = "1yjpJ6XfbUa0ANklhPEhzWcx45o";

			// Token object built using the OAuth library
			$token = new OAuthToken($token, $token_secret);

			// Consumer object built using the OAuth library
			$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

			// Yelp uses HMAC SHA1 encoding
			$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

			// Build OAuth Request using the OAuth PHP library. Uses the consumer and token object created above.
			$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);

			// Sign the request
			$oauthrequest->sign_request($signature_method, $consumer, $token);

			// Get the signed URL
			$signed_url = $oauthrequest->to_url();

			// Send Yelp API Call
			$ch = curl_init($signed_url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$data = curl_exec($ch); // Yelp response
			curl_close($ch);

			// Handle Yelp response data
			$response = json_decode($data);

			// Print it for debugging
			print_r($response);
		}
	}


	$yelp = new YelpData();
	$yelp->getData();

?>
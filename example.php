<?php

require "XORCipher.php";

$plaintext = file_get_contents("plaintext.txt");
$key = "gZK4jJDN";

$xor = new XORCipher();

/* applies a XOR cipher cyclically across the plaintext with the given key */
$cipher = $xor->cipher($plaintext, $key);

/* attempts to crack the cipher using frequency analysis */
$cracked_key = $xor->crack($cipher, strlen($key));

/* attempts to convert the cipher back to plaintext */
$cracked_plaintext = $xor->plaintext($cipher, $cracked_key);

/* if the plaintext is sufficient length and the key is 
	not too long the correct plaintext will be outputted */
echo $cracked_plaintext;
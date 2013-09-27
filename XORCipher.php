<?php

class XORCipher {
	public function cipher($plaintext, $key) {
		$key = (is_array($key)) ? $key : $this->text2ascii($key);
		$keysize = count($key);
		$cipher = array();
		$i = -1;
		
		foreach(str_split($plaintext) as $char)
			$cipher[] = ord($char) ^ $key[$i = ++$i % $keysize];

		return $cipher;
	}

	public function crack($cipher, $keysize) {
		$cipher = (!is_array($cipher)) ? $this->text2ascii($cipher) : $cipher;
		$occurences = $key = $plaintext = array();
		$i = -1;

		foreach($cipher as $char) {
			$i = ++$i % $keysize;

			if (++$occurences[$i][$char] > $occurences[$i][$key[$i]])
				$key[$i] = $char;
		}

		return $this->ascii2text(array_map(function($v) { return $v ^ 32; }, $key));
	}

	public function plaintext($cipher, $key) {
		$key = (is_array($key)) ? $key : $this->text2ascii($key);
		$keysize = count($key);
		$plaintext = "";
		$i = -1;

		foreach($cipher as $char)
			$plaintext .= chr($char ^ $key[$i = ++$i % $keysize]);

		return $plaintext;
	}

	private function text2ascii($text) {
		return array_map('ord', str_split($text));
	}

	private function ascii2text($ascii) {
		$text = "";

		foreach($ascii as $char)
			$text .= chr($char);

		return $text;
	}
}
PHP-XOR-Cipher
==============

The XORCipher class contains three primary methods: cipher(), plaintext(), and crack():

+ <code>cipher($plaintext, $key)</code> will return ciphertext generated from the plaintext and key.

+ <code>plaintext($cipher, $key)</code> will return the original text given the ciphertext and a key.

+ <code>crack($cipher, $keysize)</code> will attempt to crack the ciphertext using frequency analysis.

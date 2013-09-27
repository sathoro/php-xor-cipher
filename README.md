PHP-XOR-Cipher
==============

The XORCipher class contains three primary methods: cipher(), plaintext(), and crack().

Cipher($plaintext, $key) will return ciphertext generated from the plaintext and key.

Plaintext($cipher, $key) will return the original text given the ciphertext and a key.

Crack($cipher, $keysize) will attempt to crack the ciphertext using frequency analysis.

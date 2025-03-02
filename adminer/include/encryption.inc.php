<?php

namespace Adminer;

/**
 * Encrypts a string using AES-256-CBC.
 *
 * @param string $plaintext Plain text to encrypt.
 * @param string $key Encryption key.
 *
 * @return string|false Encrypted binary data.
 */
function encrypt_string(string $plaintext, string $key)
{
	if ($plaintext == "") {
		return "";
	}

	if (extension_loaded('openssl')) {
		return aes_encrypt_string($plaintext, $key);
	} else {
		return xxtea_encrypt_string($plaintext, $key);
	}
}

/**
 * Decrypts binary data and use old algorithm as a fallback.
 *
 * @param string $data Encrypted binary data.
 * @param string $key Decryption key.
 *
 * @return string|false Decrypted plain text or false.
 */
function decrypt_string(string $data, string $key)
{
	if ($data == "") {
		return "";
	}

	if (extension_loaded('openssl')) {
		return aes_decrypt_string($data, $key);
	} else {
		return xxtea_decrypt_string($data, $key);
	}
}

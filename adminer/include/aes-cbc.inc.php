<?php

namespace Adminer;

use Exception;

const ENCRYPTION_ALGO = 'aes-256-cbc';

/**
 * Generates a secure IV compatible with PHP 5 and PHP 7+.
 *
 * @param int $length IV length.
 *
 * @return string Generated IV.
 */
function generate_iv($length)
{
	if (function_exists('random_bytes')) {
		try {
			return random_bytes($length);
		} catch (Exception $e) {
			// Fallback to OpenSSL.
		}
	}

	return openssl_random_pseudo_bytes($length);
}

/**
 * Generates a 256-bit (32-byte) key from the SHA-512 hash.
 *
 * @param $key
 *
 * @return string
 */
function hash_key($key)
{
	return substr(hash('sha512', $key, true), 0, 32);
}

/**
 * Encrypts a string using AES-256-CBC.
 *
 * @param string $plaintext Plain text to encrypt.
 * @param string $key Encryption key.
 *
 * @return string|false Encrypted binary data or false.
 */
function aes_encrypt_string($plaintext, $key)
{
	$key = hash_key($key);
	$iv = generate_iv(openssl_cipher_iv_length(ENCRYPTION_ALGO) ?: 16);

	// Encrypts the text using AES-256-CBC.
	$ciphertext = openssl_encrypt($plaintext, ENCRYPTION_ALGO, $key, OPENSSL_RAW_DATA, $iv);
	if ($ciphertext === false) {
		return false;
	}

	// Generates an HMAC using IV + ciphertext to ensure integrity.
	$hmac = hash_hmac('sha512', $iv . $ciphertext, $key, true);

	return $iv . $hmac . $ciphertext;
}

/**
 * Decrypts an AES-256-CBC encrypted string.
 *
 * @param string $data Encrypted binary data.
 * @param string $key Decryption key.
 *
 * @return string|false Decrypted plain text or false.
 */
function aes_decrypt_string($data, $key)
{
	$ivLength = openssl_cipher_iv_length(ENCRYPTION_ALGO) ?: 16;

	// IV (16) + HMAC (64) minimum
	if ($data === false || strlen($data) < $ivLength + 64) {
		return false;
	}

	$key = hash_key($key);

	// Extracts IV (16 bytes), HMAC (64 bytes), and encrypted text.
	$iv = substr($data, 0, $ivLength);
	$hmac = substr($data, $ivLength, 64);
	$ciphertext = substr($data, $ivLength + 64);

	if ($iv === false || $hmac === false || $ciphertext === false) {
		return false;
	}

	// Verifies integrity using HMAC-SHA512.
	$calculated_hmac = hash_hmac('sha512', $iv . $ciphertext, $key, true);

	// Protection against timing attacks.
	if (!hash_equals($hmac, $calculated_hmac)) {
		return false;
	}

	// Decrypts the text.
	return openssl_decrypt($ciphertext, ENCRYPTION_ALGO, $key, OPENSSL_RAW_DATA, $iv);
}

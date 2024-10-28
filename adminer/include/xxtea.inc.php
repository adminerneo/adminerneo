<?php

namespace Adminer;

/**
 * PHP implementation of XXTEA encryption algorithm.
 *
 * @author Ma Bingyao <andot@ujn.edu.cn>
 * @link http://www.coolcode.cn/?action=show&id=128
 */

function int32($n)
{
	while ($n >= 2147483648) {
		$n -= 4294967296;
	}
	while ($n <= -2147483649) {
		$n += 4294967296;
	}

	return (int)$n;
}

function long2str($v, $w)
{
	$s = '';
	foreach ($v as $val) {
		$s .= pack('V', $val);
	}

	return $w ? substr($s, 0, end($v)) : $s;
}

function str2long($s, $w)
{
	$v = array_values(unpack('V*', str_pad($s, 4 * ceil(strlen($s) / 4), "\0")));
	if ($w) {
		$v[] = strlen($s);
	}

	return $v;
}

function xxtea_mx($z, $y, $sum, $k)
{
	return int32((($z >> 5 & 0x7FFFFFF) ^ $y << 2) + (($y >> 3 & 0x1FFFFFFF) ^ $z << 4)) ^ int32(($sum ^ $y) + ($k ^ $z));
}

/**
 * Encrypts a string using XXTEA.
 *
 * @param string $plaintext Plain text to encrypt.
 * @param string $key Encryption key.
 *
 * @return string|false Encrypted binary data or false.
 */
function xxtea_encrypt_string($plaintext, $key)
{
	$key = array_values(unpack("V*", pack("H*", md5($key))));

	$v = str2long($plaintext, true);
	$n = count($v) - 1;
	$z = $v[$n];
	$y = $v[0];
	$q = floor(6 + 52 / ($n + 1));
	$sum = 0;

	while ($q-- > 0) {
		$sum = int32($sum + 0x9E3779B9);
		$e = $sum >> 2 & 3;

		for ($p = 0; $p < $n; $p++) {
			$y = $v[$p + 1];
			$mx = xxtea_mx($z, $y, $sum, $key[$p & 3 ^ $e]);
			$z = int32($v[$p] + $mx);
			$v[$p] = $z;
		}

		$y = $v[0];
		$mx = xxtea_mx($z, $y, $sum, $key[$p & 3 ^ $e]);
		$z = int32($v[$n] + $mx);
		$v[$n] = $z;
	}

	return long2str($v, false);
}

/**
 * Decrypts an XXTEA encrypted string.
 *
 * @param string $data Encrypted binary data.
 * @param string $key Decryption key.
 *
 * @return string|false Decrypted plain text or false.
 */
function xxtea_decrypt_string($data, $key)
{
	$key = array_values(unpack("V*", pack("H*", md5($key))));

	$v = str2long($data, false);
	$n = count($v) - 1;
	$z = $v[$n];
	$y = $v[0];
	$q = floor(6 + 52 / ($n + 1));
	$sum = int32($q * 0x9E3779B9);

	while ($sum) {
		$e = $sum >> 2 & 3;

		for ($p = $n; $p > 0; $p--) {
			$z = $v[$p - 1];
			$mx = xxtea_mx($z, $y, $sum, $key[$p & 3 ^ $e]);
			$y = int32($v[$p] - $mx);
			$v[$p] = $y;
		}

		$z = $v[$n];
		$mx = xxtea_mx($z, $y, $sum, $key[$p & 3 ^ $e]);
		$y = int32($v[0] - $mx);
		$v[0] = $y;
		$sum = int32($sum - 0x9E3779B9);
	}

	return long2str($v, true);
}

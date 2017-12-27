<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Fcrypt.php';

class IdCrypt {

	const CRYPT_KEY = 'FoLLoWER';
	private static $_fcrypt;

	/**
	 * 构造函数
	 */
	function __construct() {
		self::$_fcrypt = new Fcrypt();
	}

	/**
	 * user_id加密
	 * @param int $user_id
	 * @return string $user_id_crypt
	 */
	public function encode_user_id($user_id) {
		return strval(self::encode_uid32($user_id));
	}

	/**
	 * user_id解密
	 * @param string $user_id_crypt
	 * @return int $user_id
	 */
	public function decode_user_id($user_id_crypt) {
		return self::decode_uid32($user_id_crypt);
	}

	/**
	 * user_id和album_id加密
	 * @param int $user_id
	 * @param int $album_id
	 * @return string $str_crypt
	 */
	public function encode_user_id_and_object_id($user_id, $object_id) {
		return self::$_fcrypt->encode_int64_and_int64($user_id, $object_id);
	}

	/**
	 * user_id和album_id解密
	 * @param string $str_crypt
	 * @return array array($user_id, $album_id)
	 */
	public function decode_user_id_and_object_id($str_crypt) {
		$re = self::$_fcrypt->decode_int64_and_int64($str_crypt);
		if ($re == false || !is_array($re)) {
			return false;
		}

		return array(
			'user_id' => intval($re[0]),
			'id'      => intval($re[1]),
		);
	}

	/**
	 * encrypt user id
	 *
	 * @param int $uid Open user id
	 * @return int Secret user id
	 */
	private static function encode_uid32($uid) {
		$sid = ($uid & 0x0000ff00) << 16;
		$sid += (($uid & 0xff000000) >> 8) & 0x00ff0000;
		$sid += ($uid & 0x000000ff) << 8;
		$sid += ($uid & 0x00ff0000) >> 16;
		$sid ^= 282335;

		return $sid;
	}

	/**
	 * decipher user id
	 *
	 * @param int $sid Secret user id
	 * @return int Open user id
	 */
	private static function decode_uid32($sid) {
		if (!is_int($sid) && !is_numeric($sid)) {
			return false;
		}
		$sid ^= 282335;
		$uid = ($sid & 0x00ff0000) << 8;
		$uid += ($sid & 0x000000ff) << 16;
		$uid += (($sid & 0xff000000) >> 16) & 0x0000ff00;
		$uid += ($sid & 0x0000ff00) >> 8;

		return $uid;
	}

	/**
	 * 从一个8字节的二进制(小端编码)串中解析出64位整形数
	 * @param $data
	 */
	private static function unpack_uint64($data) {
		$data = strval($data);

		$ret = 0;
		$ret += (ord($data[0]) << 0);
		$ret += (ord($data[1]) << 8);
		$ret += (ord($data[2]) << 16);
		$ret += (ord($data[3]) << 24);
		$ret += (ord($data[4]) << 32);
		$ret += (ord($data[5]) << 40);
		$ret += (ord($data[6]) << 48);
		$ret += (ord($data[7]) << 56);

		return $ret;
	}

	/**
	 * 从一个8字节的二进制(小端编码)串中解析出32位整形数
	 * @param $data
	 */
	private static function unpack_uint32($data) {
		$data = strval($data);
		$ret  = 0;
		$ret += (ord($data[0]) << 0);
		$ret += (ord($data[1]) << 8);
		$ret += (ord($data[2]) << 16);
		$ret += (ord($data[3]) << 24);

		return $ret;
	}
}
<?php

class Fcrypt {

	private $int_FastCryptRawSecretMaxsize = 600;
	private $int_FastD2hstrMaxDataLen = 600;
	private $int_SizeOfInt = 4;
	private $strRawSecret = "\xA1\xB6\xC0\xC1\xA2\xBA\xAE\xC7\xEF\x0D\x0A\xCF\xE6\xBD\xAD\xB1\xB1\x3D\xC8\xA5\x0D\x0A\xE9\xD9\xD7\xD3\xD6\xDE\xCD\xB7\x0D\x0A\xBF\xB4\xB2\xCD\xF2\xC9\xBD\xBA\xEC\xB1\xE9\x0D\x0A\xB2\xE3\xC1\xD6\xBE\xA1\xC8\xA5\x0D\x0A\xE9\xD9\xD7\xD3\xD6\xDE\xCD\xB7\x0D\x0A\xBF\xB4\xCD\xF2\xC9\xBD\xBA\xEC\xB1\xE9\x0D\x0A\xB2\xE3\xC1\xD6\xBE\xA1\xC8\xBE\x0D\x0A\xC2\xFE\xBD\xAD\xB1\xCC\xCD\xB8\x0D\x0A\xB0\xD9\xF4\xB4\xD5\xF9\xC1\xF7\x0D\x0A\xD3\xA5\xBB\xF7\xB3\xA4\xBF\xD5\x0D\x0A\xD3\xE3\xCF\xE8\xC7\xB3\xB5\xD7\x0D\x0A\xCD\xF2\xCE\xEF\xCB\xAA\xCC\xEC\xBE\xBA\xD7\xD4\xD3\xC9\x0D\x0A\xE2\xEA\xC1\xC8\xC0\xAA\x0D\x0A\xCE\xCA\xB2\xD4\xC3\xA3\xB4\xF3\xB5\xD8\x0D\x0A\xCB\xAD\xD6\xF7\xB3\xC1\xB8\xA1\x0D\x0A\xD0\xAF\xC0\xB4\xB0\xD9\xC2\xC2\xD4\xF8\xD3\xCE\x0D\x0A\xD2\xE4\xCD\xF9\xCE\xF4\xE1\xBF\xE1\xC9\xCB\xEA\xD4\xC2\xB3\xED\x0D\x0A\xC7\xA1\xCD\xAC\xD1\xA7\xC9\xD9\xC4\xEA\x0D\x0A\xB7\xE7\xBB\xAA\xD5\xFD\xC3\xAF\x0D\x0A\xCA\xE9\xC9\xFA\xD2\xE2\xC6\xF8\x0D\x0A\xBB\xD3\xB3\xE2\xB7\xBD\xE5\xD9\x0D\x0A\xD6\xB8\xB5\xE3\xBD\xAD\xC9\xBD\x0D\x0A\xBC\xA4\xD1\xEF\xCE\xC4\xD7\xD6\x0D\x0A\xB7\xE0\xCD\xC1\xB5\xB1\xC4\xEA\xCD\xF2\xBB\xA7\xBA\xEE\x0D\x0A\xD4\xF8\xBC\xC7\xB7\xF1\x0D\x0A\xB5\xBD\xD6\xD0\xC1\xF7\xBB\xF7\xCB\xAE\x0D\x0A\xC0\xCB\xB6\xF4\xB7\xC9\xD6\xDB\x0D\x0A\xBA\xE1\xBF\xD5\xB3\xF6\xCA\xC0\x0D\x0A\xC3\xA7\xC0\xA5\xC2\xD8\x0D\x0A\xD4\xC4\xBE\xA1\xC8\xCB\xBC\xE4\xB4\xBA\xC9\xAB\x0D\x0A\xB7\xC9\xC6\xF0\xD3\xF1\xC1\xFA\xC8\xFD\xB0\xD9\xCD\xF2\x0D\x0A\xBD\xC1\xB5\xC3\xD6\xDC\xCC\xEC\xBA\xAE\xB3\xB9\x0D\x0A\xCF\xC4\xC8\xD5\xCF\xFB\xC8\xDA\x0D\x0A\xBD\xAD\xBA\xD3\xBA\xE1\xD2\xE7\x0D\x0A\xC8\xCB\xBB\xF2\xCE\xAA\xD3\xE3\xB1\xEE\x0D\x0A\xC7\xA7\xC7\xEF\xB9\xA6\xD7\xEF\x0D\x0A\xCB\xAD\xC8\xCB\xD4\xF8\xD3\xEB\xC6\xC0\xCB\xB5\x0D\x0A\xB6\xF8\xBD\xF1\xCE\xD2\xCE\xBD\xC0\xA5\xC2\xD8\x0D\x0A\xB2\xBB\xD2\xAA\xD5\xE2\xB8\xDF\x0D\x0A\xB2\xBB\xD2\xAA\xD5\xE2\xB6\xE0\xD1\xA9\x0D\x0A\xB0\xB2\xB5\xC3\xD2\xD0\xCC\xEC\xB3\xE9\xB1\xA6\xBD\xA3\x0D\x0A\xB0\xD1\xC8\xEA\xB2\xC3\xCE\xAA\xC8\xFD\xBD\xD8\x0D\x0A\xD2\xBB\xBD\xD8\xD2\xC5\xC5\xB7\x0D\x0A\xD2\xBB\xBD\xD8\xD4\xF9\xC3\xC0\x0D\x0A\xD2\xBB\xBD\xD8\xBB\xB9\xB6\xAB\xB9\xFA\x0D\x0A\xCC\xAB\xC6\xBD\xCA\xC0\xBD\xE7\x0D\x0A\xBB\xB7\xC7\xF2\xCD\xAC\xB4\xCB\xC1\xB9\xC8\xC8";
	private $strRawdest;

	/**
	 * 构造函数
	 */
	function __construct($strKey = 'slightech') {
		$this->__fcrypt_init($strKey);
	}


	/**
	 * fcrypt_checksum_int
	 *
	 * @param
	 * @return
	 */
	function fcrypt_checksum_int($strKey) {
		$sum      = 0;
		$keyLen   = strlen($strKey);
		$slen     = $keyLen;
		$intStart = 0;
		if ($slen % 2 != 0) {
			$strKey = str_pad($strKey, $slen + 1, "\x00");
		}
		while ($slen > 1) {
			$arrTmp = unpack('va', substr($strKey, $intStart, 2));
			$slen -= 2;
			$intStart += 2;
			$sum += $arrTmp['a'];
		}
		if ($slen > 0) {
			$arrTmp = unpack('va', substr($strKey, $intStart, 2));
			$sum += ($arrTmp['a'] & 0xff);
		}

		return $sum;
	}

	/**
	 * 初始化加密解密类
	 *
	 * @param string $strKey 加密用的字符串
	 * @return
	 */
	function __fcrypt_init($strKey) {
		$intSeed = $this->fcrypt_checksum_int($strKey);
		srand($intSeed);
		$intRawLen          = strlen($this->strRawSecret);
		$this->strRawSecret = str_pad($this->strRawSecret, 600, "\x00");
		for ($i = 0; $i < intval($this->int_FastCryptRawSecretMaxsize / $this->int_SizeOfInt); $i++) {
			$intRand = rand();
			if ($i * $this->int_SizeOfInt >= $intRawLen) {
				$intTmp = $intRand;
			} else {
				$arrTmp = unpack('la', substr($this->strRawSecret, $i * $this->int_SizeOfInt, $this->int_SizeOfInt));
				$intTmp = $intRand + intval($arrTmp['a']);
			}
			$this->strRawdest .= pack('l', $intTmp);
		}
	}

	/**
	 * 通过id获取加密后的字符串,图片id采用64位
	 *
	 * @param
	 * @return
	 */
	function encode_int64_and_int64($intId1, $intId2) {
		//对$intId1进行判断，是图片id，还是其它id
		if (($intId1 & 0xFFFFFFFF00000000) != 0) {
			$intId1 = intval($intId1);
			$intId2 = intval($intId2);

			//64位uint的小端模式
			$strtmp = pack('L', $intId1 & 0x00000000FFFFFFFF) . pack('L', ($intId1 & 0xFFFFFFFF00000000) >> 32)
				. pack('L', $intId2 & 0x00000000FFFFFFFF) . pack('L', ($intId2 & 0xFFFFFFFF00000000) >> 32);
		} else {
			$strtmp = pack('L', $intId1) . pack('L', $intId2);
		}
		$strResult = $this->fcrypt_encode_hmac($strtmp);

		return $strResult;
	}

	/**
	 * brief of function
	 *
	 * detail of function
	 *
	 * @param
	 * @return
	 * @access
	 * @see
	 */
	function fcrypt_encode_hmac($strPdata) {
		$strBuff = $strPdata;
		$intSum  = $this->fcrypt_checksum_int($strPdata);
		$intSum  = ($intSum >> 16) | (($intSum << 16) & 0xffff0000);
		$strBuff .= pack('L', $intSum);

		$intLenNum     = strlen($strBuff);
		$strResult     = "";
		$strResultLast = "";
		if ($intLenNum >= 2) {
			$arrUnpack     = unpack('va', substr($strBuff, $intLenNum - 2, 2));
			$intMagic      = $intLenNum + $arrUnpack['a'];
			$intKeyIndex   = $intLenNum & 0xff;
			$arrUnpack1    = unpack('va', substr($this->strRawdest, $intKeyIndex * 2, 2));
			$strResultLast = pack('v', $arrUnpack['a'] ^ $arrUnpack1['a']);
			$intLenNum -= 2;
		}
		$intCount = 0;
		while ($intLenNum > 1) {
			$intKeyIndex = $intMagic & 0xff;
			$arrUnpack   = unpack('va', substr($strBuff, $intCount, 2));
			$arrUnpack1  = unpack('va', substr($this->strRawdest, $intKeyIndex * 2, 2));
			$strResult .= pack('v', ($arrUnpack['a'] ^ $arrUnpack1['a']));

			$intLenNum -= 2;
			$intCount += 2;
			$intMagic++;

		}
		if ($intLenNum > 0) {
			$intKeyIndex = $intMagic & 0xff;
			$arrUnpack   = unpack('Ca', substr($strBuff, $intCount, 1));
			$arrUnpack1  = unpack('va', substr($this->strRawdest, $intKeyIndex * 2, 2));
			$strResult .= pack('C', ($arrUnpack['a'] ^ $arrUnpack['a']) & 0xff);
		}
		$strResult = strtolower(bin2hex($strResult . $strResultLast));

		return $strResult;
	}

	/**
	 * 通过加密串获取id
	 *
	 * @param
	 * @return
	 */
	function decode_int64_and_int64($strEncode) {
		if (strlen($this->strRawdest) == 0 || strlen($strEncode) == 0 || strlen($strEncode) < 8) {
			return -1;
		}

		$strdebuf = "";
		$intslen  = strlen($strEncode);
		if ($intslen > ($this->int_FastD2hstrMaxDataLen + 4) * 2) {
			return -2;
		}

		$strBuffer = "";
		for ($i = 0; $i < $intslen; $i = $i + 2) {
			$strTmp = substr($strEncode, $i, 2);
			if (strlen($strTmp) != 2) {
				$strTmp = "\0";
			}
			$strBuffer .= pack('C', (hexdec($strTmp)));
		}
		$strpbuf = "";
		$res     = $this->fcrypt_decode_hmac($strBuffer, $strpbuf);

		if ($res != 2 * $this->int_SizeOfInt) {
			return -1;
		}
		$result = false;
		if (strlen($strEncode) == 24) {
			$arrId  = unpack('L2a', substr($strpbuf, 0, 8));
			$result = array($arrId['a1'], $arrId['a2']);
		} elseif (strlen($strEncode) == 40) {
			$arrId  = unpack('L4a', substr($strpbuf, 0, 16));
			$result = array($arrId['a1'] + ($arrId['a2'] << 32 & 0xffffffff00000000),
							$arrId['a3'] + ($arrId['a4'] << 32 & 0xffffffff00000000));
		}

		return $result;
	}

	/**
	 * fcrypt_decode_hmac
	 *
	 * @param
	 * @return
	 */
	function fcrypt_decode_hmac($strBuff, &$strpbuf) {
		$intBuffLen  = strlen($strBuff);
		$intslen     = $intBuffLen;
		$strpbuf     = "";
		$strpbufTail = "";
		$magic       = 0;
		if ($intslen >= 2) {
			$rdata       = unpack('va', substr($strBuff, $intslen - 2, 2));
			$intTmp      = $intslen & 0xff;
			$arrTmp      = unpack('va', substr($this->strRawdest, 2 * $intTmp, 2));
			$wdata       = $rdata['a'] ^ $arrTmp['a'];
			$strpbufTail = pack('v', $wdata);
			$magic       = $intslen + $wdata;
			$intslen -= 2;
		}

		$intTmp = 0;
		while ($intslen > 1) {
			$rdata = unpack('va', substr($strBuff, $intTmp, 2));
			$intTmp += 2;
			$arrTmp = unpack('va', substr($this->strRawdest, 2 * (($magic++) & 0xff), 2));
			$strpbuf .= pack('v', $rdata['a'] ^ $arrTmp['a']);
			$intslen -= 2;
		}
		if ($intslen > 0) {
			$rdata   = unpack('Ca', substr($strBuff, $intTmp, 1));
			$arrTmp  = unpack('va', substr($this->strRawdest, 2 * ($magic & 0xff), 2));
			$intTmp1 = $arrTmp['a'] & 0xff;
			$strpbuf .= pack('C', ($rdata['a'] ^ $intTmp1) & 0xff);
		}
		$strpbuf .= $strpbufTail;
		$intBuflen = strlen($strpbuf);
		$arrOldsum = unpack('La', substr($strpbuf, $intBuflen - 4, 4));
		$intSum    = $this->fcrypt_checksum_int(substr($strpbuf, 0, $intBuflen - 4));

		$intSum      = ($intSum >> 16) | (($intSum << 16) & 0xffff0000);
		$intArraySum = unpack('La', pack('L', $intSum));
		$intSum      = $intArraySum['a'];
		if ($intSum != $arrOldsum['a']) {
			return -2;
		}

		return $intBuffLen - 4;
	}
}

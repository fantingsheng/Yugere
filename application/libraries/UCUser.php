<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'config/uc_client.php';
require_once APPPATH . 'libraries/uc_client/client.php';

class UCUser {

	const LOGIN_BY_NAME = 0;
	const LOGIN_BY_ID   = 1;
	const LOGIN_BY_MAIL = 2;

	public function uc_auth_encode($string, $key = '', $expiry = 0) {
		return uc_authcode($string, 'ENCODE', $key, $expiry);
	}

	public function uc_auth_decode($string, $key = '', $expiry = 0) {
		return uc_authcode($string, 'DECODE', $key, $expiry);
	}

	public function uc_authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
		return uc_authcode($string, $operation, $key, $expiry);
	}

	public function uc_user_register($username, $password, $email, $questionid = '', $answer = '', $regip = '') {
		return uc_user_register($username, $password, $email, $questionid, $answer, $regip);
	}

	public function uc_user_login($username, $password, $isuid = self::LOGIN_BY_MAIL, $checkques = 0, $questionid = '', $answer = '', $ip = '') {
		return uc_user_login($username, $password, $isuid, $checkques, $questionid, $answer, $ip);
	}

	public function uc_user_synlogin($uid) {
		return uc_user_synlogin($uid);
	}

	public function uc_user_synlogout() {
		return uc_user_synlogout();
	}

	public function uc_user_edit($username, $oldpw, $newpw, $email, $ignoreoldpw = 0, $questionid = '', $answer = '') {
		return uc_user_edit($username, $oldpw, $newpw, $email, $ignoreoldpw, $questionid, $answer);
	}

	public function uc_user_delete($uid) {
		return uc_user_delete($uid);
	}

	public function uc_user_deleteavatar($uid) {
		return uc_user_deleteavatar($uid);
	}

	public function uc_user_checkname($username) {
		return uc_user_checkname($username);
	}

	public function uc_user_checkemail($email) {
		return uc_user_checkemail($email);
	}

	public function uc_user_addprotected($username, $admin = '') {
		return uc_user_addprotected($username, $admin);
	}

	public function uc_user_deleteprotected($username) {
		return uc_user_deleteprotected($username);
	}

	public function uc_user_getprotected() {
		return uc_user_getprotected();
	}

	public function uc_get_user($username, $isuid = self::LOGIN_BY_ID) {
		return uc_get_user($username, $isuid);
	}

	public function uc_user_merge($oldusername, $newusername, $uid, $password, $email) {
		return uc_user_merge($oldusername, $newusername, $uid, $password, $email);
	}

	public function uc_user_merge_remove($username) {
		return uc_user_merge_remove($username);
	}

	public function uc_user_getcredit($appid, $uid, $credit) {
		return uc_user_getcredit($appid, $uid, $credit);
	}

	public function uc_credit_exchange_request($uid, $from, $to, $toappid, $amount) {
		return uc_credit_exchange_request($uid, $from, $to, $toappid, $amount);
	}

	public function uc_avatar($uid, $type = 'virtual', $returnhtml = 1) {
		return uc_avatar($uid, $type, $returnhtml);
	}

	public function uc_user_logincheck($username, $ip) {
		return uc_user_logincheck($username, $ip);
	}

	public function uc_check_avatar($uid, $size = 'middle', $type = 'virtual') {
		return uc_check_avatar($uid, $size, $type);
	}

	public function uc_get_avatar($uid, $size = 'middle', $type = 'virtual') {
		return uc_get_avatar($uid, $size, $type);
	}

	public function uc_get_avatar_path($uid, $size = 'middle', $type = 'virtual') {
		return UC_AVATAR_PATH.'/'.uc_get_avatar($uid, $size, $type);
	}

	public function uc_mail_queue($uids, $emails, $subject, $message, $frommail = '', $charset = 'utf-8', $htmlon = FALSE, $level = 1) {
		return uc_mail_queue($uids, $emails, $subject, $message, $frommail, $charset, $htmlon, $level);
	}

	public function uc_tag_get($tagname, $nums = 0) {
		return uc_tag_get($tagname, $nums);
	}

}
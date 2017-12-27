<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'config/uc_client.php';
require_once APPPATH . 'libraries/uc_client/client.php';

class UCFriend {

	public function uc_friend_add($uid, $friendid, $comment='') {
		return uc_friend_add($uid, $friendid, $comment);
	}

	public function uc_friend_delete($uid, $friendids) {
		return uc_friend_delete($uid, $friendids);
	}

	public function uc_friend_totalnum($uid, $direction = 0) {
		return uc_friend_totalnum($uid, $direction);
	}

	public function uc_friend_ls($uid, $page = 1, $pagesize = 10, $totalnum = 10, $direction = 0) {
		return uc_friend_ls($uid, $page, $pagesize, $totalnum, $direction);
	}

}
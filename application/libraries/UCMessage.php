<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'config/uc_client.php';
require_once APPPATH . 'libraries/uc_client/client.php';

class UCMessage {

	public function uc_pm_location($uid, $newpm = 0) {
		uc_pm_location($uid, $newpm);
	}

	public function uc_pm_checknew($uid, $more = 0) {
		return uc_pm_checknew($uid, $more);
	}

	public function uc_pm_send($fromuid, $msgto, $subject, $message, $instantly = 1, $replypmid = 0, $isusername = 0, $type = 0) {
		return uc_pm_send($fromuid, $msgto, $subject, $message, $instantly, $replypmid, $isusername, $type);
	}

	public function uc_pm_delete($uid, $folder, $pmids) {
		return uc_pm_delete($uid, $folder, $pmids);
	}

	public function uc_pm_deleteuser($uid, $touids) {
		return uc_pm_deleteuser($uid, $touids);
	}

	public function uc_pm_deletechat($uid, $plids, $type = 0) {
		return uc_pm_deletechat($uid, $plids, $type);
	}

	public function uc_pm_readstatus($uid, $uids, $plids = array(), $status = 0) {
		return uc_pm_readstatus($uid, $uids, $plids, $status);
	}

	public function uc_pm_list($uid, $page = 1, $pagesize = 10, $folder = 'inbox', $filter = 'newpm', $msglen = 0) {
		return uc_pm_list($uid, $page, $pagesize, $folder, $filter, $msglen);
	}

	public function uc_pm_ignore($uid) {
		return uc_pm_ignore($uid);
	}

	public function uc_pm_view($uid, $pmid = 0, $touid = 0, $daterange = 1, $page = 0, $pagesize = 10, $type = 0, $isplid = 0) {
		return uc_pm_view($uid, $pmid, $touid, $daterange, $page, $pagesize, $type, $isplid);
	}

	public function uc_pm_view_num($uid, $touid, $isplid) {
		return uc_pm_view_num($uid, $touid, $isplid);
	}

	public function uc_pm_viewnode($uid, $type, $pmid) {
		return uc_pm_viewnode($uid, $type, $pmid);
	}

	public function uc_pm_chatpmmemberlist($uid, $plid = 0) {
		return uc_pm_chatpmmemberlist($uid, $plid);
	}

	public function uc_pm_kickchatpm($plid, $uid, $touid) {
		return uc_pm_kickchatpm($plid, $uid, $touid);
	}

	public function uc_pm_appendchatpm($plid, $uid, $touid) {
		return uc_pm_appendchatpm($plid, $uid, $touid);
	}

	public function uc_pm_blackls_get($uid) {
		return uc_pm_blackls_get($uid);
	}

	public function uc_pm_blackls_set($uid, $blackls) {
		return uc_pm_blackls_set($uid, $blackls);
	}

	public function uc_pm_blackls_add($uid, $username) {
		return uc_pm_blackls_add($uid, $username);
	}

	public function uc_pm_blackls_delete($uid, $username) {
		return uc_pm_blackls_delete($uid, $username);
	}

}
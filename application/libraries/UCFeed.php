<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'config/uc_client.php';
require_once APPPATH . 'libraries/uc_client/client.php';

class UCFeed {

	public function uc_feed_add($icon, $uid, $username, $title_template='', $title_data='', $body_template='', $body_data='', $body_general='', $target_ids='', $images = array()) {
		return uc_feed_add($icon, $uid, $username, $title_template, $title_data, $body_template, $body_data, $body_general, $target_ids, $images);
	}

	public function uc_feed_get($limit = 100, $delete = TRUE) {
		return uc_feed_get($limit, $delete);
	}

}
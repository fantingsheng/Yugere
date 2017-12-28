<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $_view_data;

	function __construct() {
		parent::__construct();
		// calc an offset of 24 hours
		$offset = 3600 * 24;
		// calc the string in GMT not localtime and add the offset
		$expire = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
		//output the HTTP header
		Header($expire);
		Header("Cache-Control: public, max-age=$offset");
		Header("Pragma: public, max-age=$offset"); 

		$lang = $this->input->get('lang');
		if (empty($lang)) {
			$lang = $this->uri->segment(1);
		}
		$this->lang->load('web', 'english');
        //默认语言为英语 chinese
        @include(APPPATH.'config/domain.php');
        if (in_array($lang, $lang_suffix)) {
        	$this->config->set_item('language', $lang);
        	$this->lang->load('web', $lang_set[$lang]);
        }
		$this->_set_view_data();
		$this->_load_user();
	}
    
	private function _set_view_data() {
		$this->_view_data['lang'] 				= $this->config->item('language');
		$this->_view_data['channel'] 			= $this->input->get('ch');
		$this->_view_data['controller'] 		= $this->_get_controller();
		$this->_view_data['random_char'] 		= $this->_generate_random(10);
		$this->_view_data['lang_sort'] 			= $this->lang->line('lang_sort');
		$this->_view_data['html_lang'] 			= $this->lang->line('html_lang');
		$this->_view_data['lang_menu'] 			= $this->_return_lang_menu($this->_view_data['controller']);
		$this->_view_data['menu_slife'] 		= $this->lang->line('menu_slife');
		$this->_view_data['menu_smart_band'] 	= $this->lang->line('menu_smart_band');
		$this->_view_data['menu_mynt'] 			= $this->lang->line('menu_mynt');
		$this->_view_data['menu_sdeno'] 		= $this->lang->line('menu_sdeno');
		$this->_view_data['menu_news'] 			= $this->lang->line('menu_news'); 
		$this->_view_data['menu_about'] 		= $this->lang->line('menu_about');
		$this->_view_data['menu_blog'] 			= $this->lang->line('menu_blog');
		$this->_view_data['menu_forum'] 		= $this->lang->line('menu_forum');
		$this->_view_data['menu_support'] 		= $this->lang->line('menu_support');
		$this->_view_data['menu_product'] 		= $this->lang->line('menu_product');
		$this->_view_data['menu_cooperation'] 	= $this->lang->line('menu_cooperation');
		$this->_view_data['submenu_buy'] 		= $this->lang->line('submenu_buy');
		$this->_view_data['submenu_buy_link'] 	= $this->lang->line('submenu_buy_link');
		$this->_view_data['faqs'] 				= $this->lang->line('faqs');
		$this->_view_data['menu_login'] 		= $this->lang->line('menu_login');
		$this->_view_data['menu_change_pass'] 	= $this->lang->line('menu_change_pass');
		$this->_view_data['menu_forget_pass'] 	= $this->lang->line('menu_forget_pass');
		$this->_view_data['menu_logout'] 		= $this->lang->line('menu_logout');
		$this->_view_data['menu_product_mynt'] 	= $this->lang->line('menu_product_mynt');
		$this->_view_data['menu_product_sdeno'] = $this->lang->line('menu_product_sdeno');
		$this->_view_data['menu_product_camera']= $this->lang->line('menu_product_camera');
		$this->_view_data['menu_product_gps'] 	= $this->lang->line('menu_product_gps');
		$this->_view_data['menu_product_slife'] = $this->lang->line('menu_product_slife');
		$this->_view_data['menu_mynt_faq'] 		= $this->lang->line('menu_mynt_faq');
		$this->_view_data['menu_mynt_sdk_faq'] 	= $this->lang->line('menu_mynt_sdk_faq');
		$this->_view_data['menu_co_sdk'] 		= $this->lang->line('menu_co_sdk');
		$this->_view_data['menu_co_platform'] 	= $this->lang->line('menu_co_platform');
		$this->_view_data['menu_co_customize'] 	= $this->lang->line('menu_co_customize');
		$this->_view_data['loginEmail'] 		= $this->lang->line('loginEmail');
		$this->_view_data['retrieve_password'] 	= $this->lang->line('retrieve_password');
		$this->_view_data['password'] 			= $this->lang->line('password');
		$this->_view_data['submit'] 			= $this->lang->line('submit');
		$this->_view_data['reset'] 				= $this->lang->line('reset');
		$this->_view_data['console_log'] 		= $this->lang->line('console_log');
		$this->_view_data['subscribe_title'] 	= $this->lang->line('subscribe_title');
		$this->_view_data['subscribe_intro'] 	= $this->lang->line('subscribe_intro');
		$this->_view_data['mail_text'] 			= $this->lang->line('mail_text');
		$this->_view_data['mail_statement'] 	= $this->lang->line('mail_statement');
		$this->_view_data['mail_btn'] 			= $this->lang->line('mail_btn');
		$this->_view_data['mail_error_info'] 	= $this->lang->line('mail_error_info');
		$this->_view_data['buy_first'] 			= $this->lang->line('buy_first');
		$this->_view_data['buy_source'] 		= $this->input->get('source') == null ? '' : '?source=' . $this->input->get('source');
		$this->_view_data['mynt_buy_link'] 		= $this->lang->line('mynt_buy_link');
		$this->_view_data['mynt_buy_taobao'] 	= $this->lang->line('mynt_buy_taobao');
		$this->_view_data['mynt_buy_tmall'] 	= $this->lang->line('mynt_buy_tmall');
		$this->_view_data['mynt_buy_jd'] 		= $this->lang->line('mynt_buy_jd');
		$this->_view_data['mynt_buy_amazon'] 	= $this->lang->line('mynt_buy_amazon');
		$this->_view_data['footer_copyright'] 	= $this->lang->line('footer_copyright');
	}

	private function _return_lang_menu($controller) {
		$lang_menu = '';
		$lang_set = array(
			'cn' => '中文',
			'es' => 'Español',
			'de' => 'Deutsch',
			'kr' => '한국어',
			'fr' => 'Français',
			'it' => 'Italiano',
			'ar' => 'Arabic'
		);
		$controller = empty($controller)?'':'/'.$controller;
		foreach ($lang_set as $key => $value) {
			$lang_menu = $lang_menu."<li><a class='on' href='/".$key.$controller."'><span class='".$key."'></span>".$value."</a></li>";
		}
		return $lang_menu;
	}

	private function _load_user() {
		$this->load->library('UCUser');
		$auth_key = preg_grep("/9sK9_[^_]*_auth/i", array_keys($_COOKIE));
		$salt_key = preg_grep("/9sK9_[^_]*_saltkey/i", array_keys($_COOKIE));
		//if ($auth_key && $salt_key) {
			$auth = $_COOKIE[array_pop($auth_key)];
			$salt = $_COOKIE[array_pop($salt_key)];
			//list($pwd, $uid) = explode("\t", $this->ucuser->uc_auth_decode($auth, md5('d95b46bk5agLaOBq'.$salt)));
			$uid = $this->session->userdata('uid');
			if ($uid > 0) {
				$this->_view_data['user'] = array(
					'user_id' => $uid,
					'avatar'  => "https://forum.slightech.com/uc_server/avatar.php?uid={$uid}&type=virtual&size=small",
				);
			}
		//}
	}

	public function is_mobile() {
		if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
			$is_mobile = false;
		} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
				$is_mobile = true;
		} else {
			$is_mobile = false;
		}
		return $is_mobile;
	}

	public function return_lang() {
		$lang = $this->uri->segment(1);
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "en";
		}
		return $lang;
	}

	protected function _check_email($email) {
		$this->load->helper('email');
		if (empty($email) || !valid_email($email)) {
			$this->_display_json(ErrorCode::EMAIL_NOT_VALID);
			exit();
		}
	}

	protected function _display_json($ret, $values = array()) {
		if ($this->input->post('lang') == 'cn' || $this->input->get('lang') == 'cn') {
			$msg = ErrorCode::$zh_codes[$ret];
		} else {
			$msg = ErrorCode::$codes[$ret];
		}
		$result = array('ret' => $ret, 'msg' => $msg);
		if (!empty($values)) {
			$result = array_merge($result, $values);
		}
		echo json_encode($result);
	}

	protected function _get_controller() {
		@include(APPPATH.'config/domain.php');
		$tail_url = uri_string();
		$segment1 = $this->uri->segment(1);
		$segment2 = $this->uri->segment(2);
		$segment3 = $this->uri->segment(3);
		$segment4 = $this->uri->segment(4);
		
		if (in_array($segment1, $lang_suffix)) {
			if(!empty($segment3)) {
				$end_url = $segment3;
			}
			if(!empty($segment3) && !empty($segment4)) {
				$end_url = $segment3."/".$segment4;
			}
			if(empty($end_url)) {
				return in_array($segment2, $domain)?'':$segment2;
			} else {
				return in_array($segment2, $domain)?$end_url:$segment2."/".$end_url;
			}
		} else {
			if(!empty($segment2)) {
				$end_url = $segment2;
			}
			if(!empty($segment2) && !empty($segment3)) {
				$end_url = $segment2."/".$segment3;
			}
			if(empty($end_url)) {
				return in_array($segment1, $domain)?'':$segment1;
			} else {
				return in_array($segment1, $domain)?$end_url:$segment1."/".$end_url;
			}
			
		}
		
	}

	protected function _generate_random($len) {
		$chars = array('s', 'l', 'i', 'g', 'h', 't', 'e', 'c', 'h', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		$charsLen = count($chars) - 1;
		shuffle($chars); 
		$random = "";
		for ($i=0; $i<$len; $i++) { 
	        $random .= $chars[mt_rand(0, $charsLen)]; 
	    }  
	    return $random;  
	}

}

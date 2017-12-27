<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	
	//配置信息
	private $confObj;
	
	//配置文件
	private $configPath;
	
	function __construct() {
		parent::__construct();
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->driver('cache');
		$this->configPath = str_replace("\\", "/", dirname(APPPATH)) . '/' . GB_CONF_FILE;
		$this->_view_data['title']  = $this->lang->line('news_title');
		$this->_view_data['keywords'] = $this->lang->line('news_keywords');
		$this->_view_data['desc']   = $this->lang->line('news_desc');	
		$this->_view_data['active'] = 'news';
		$lang = $this->uri->segment(1);
		@include(APPPATH.'config/domain.php');
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "cn";
		}
	}
	
	//新闻首页

	public function index() {
		@include(APPPATH.'config/domain.php');
		$lang = $this->uri->segment(1);
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "cn";
		}
		$this->page(1, $lang);
	}
	
	private function init() {
		//加载必要的类库
		$this->load->library('Yaml');
		$this->load->library('Markdown');
		$this->load->library('Pager');
		
		$blogPath = str_replace("\\", "/", dirname(APPPATH)) . '/article/';
		
		//加载配置文件
		$this->confObj = $this->yaml->getConfObject($this->configPath);
		
		//侧边栏最近新闻条数		
		$recentSize = $this->confObj['blog']['recentSize'];
		
		//是否需要所有新闻
		$allBlogsForPage = $this->confObj['blog']['allBlogsForPage'];
		
		//初始化新闻信息
		$this->markdown->initAllBlogData($blogPath, $this->confObj['enableCache']);
		
		//所有新闻
		$allBlogsList = null;
		if ($allBlogsForPage) {
			//所有新闻
			$allBlogsList = $this->markdown->getAllBlogs();
		}
		
		//所有分类
		$categoryList = $this->markdown->getAllCategorys();
		
		//所有标签
		$tagsList = $this->markdown->getAllTags();
		
		//归档月份
		$yearMonthList = $this->markdown->getAllYearMonths();
		
		//最近新闻
		$recentBlogList = $this->markdown->getBlogsRecent($recentSize);
		
		//设置数据
		$this->_view_data['allBlogsList'] = $allBlogsList;
		$this->_view_data['categoryList'] = $categoryList;
		$this->_view_data['tagsList'] = $tagsList;
		$this->_view_data['yearMonthList'] = $yearMonthList;
		$this->_view_data['recentBlogList'] = $recentBlogList;
		$this->_view_data['confObj'] = $this->confObj;	
		//配置名件对象别名
		$this->_view_data['site'] = $this->confObj;	
	}
	
	//加载缓存文件
	private function loadOutCache() {
		$fag = false;
		$cacheKey = $this->getCacheKey();
		$html = $this->cache->file->get($this->getCacheKey());
		if (!$html) { //没有缓存
			$this->init();
		} else {
			$this->output->set_output($html);
			$cacheHeaderVal = strtoupper(substr($cacheKey, 0, 32));
			$this->output->set_header("Cache-Key: " . $cacheHeaderVal);
			$fag = true;
		}
		return $fag;
	}
	
	//分类下的新闻列表
	public function category($categoryId, $pageNo=1) {
		if ($this->loadOutCache()) return;
		
		$categoryId = (int)$categoryId;
		$pageNo = (int)$pageNo;
		$pageSize = $this->confObj['blog']['pageSize'];
		$pageBarSize = $this->confObj['blog']['pageBarSize'];
		
		$pages = $this->markdown->getCategoryTotalPages($categoryId, $pageSize);
		
		if ($pageNo <= 0) {
			$pageNo = 1;
		}
		
		if ($pageNo > $pages) {
			$pageNo = $pages;
		}
		
		$category = $this->markdown->getCategoryById($categoryId);
		$pageData = $this->markdown->getBlogsPageByCategory($categoryId, $pageNo, $pageSize);
		$pagination = $this->pager->splitPage($pages, $pageNo, $pageBarSize, "/category/$categoryId/");
		
		$this->_view_data['pagination'] = $pagination;
		$this->_view_data['pageName'] = $this->lang->line('news_category');
		$this->_view_data['categoryId'] = $categoryId;
		$this->_view_data['category'] = $category;
		$this->_view_data['pageNo'] = $pageNo;
		$this->_view_data['pages'] = $pageData['pages'];
		$this->_view_data['blogList'] = $pageData['blogList'];	
		return $this->load->view('news', $this->_view_data);
	}
	
	//按月归档下的新闻列表
	public function archive($yearMonthId, $pageNo=1) {
		if ($this->loadOutCache()) return;
		@include(APPPATH.'config/domain.php');
		$lang = $this->uri->segment(1);
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "cn";
		}
		$pageNo = (int)$pageNo;
		$pageSize = $this->confObj['blog']['pageSize'];
		$pageBarSize = $this->confObj['blog']['pageBarSize'];
		
		$pages = $this->markdown->getYearMonthTotalPages($yearMonthId, $pageSize);
		
		if ($pageNo <= 0) {
			$pageNo = 1;
		}
		
		if ($pageNo > $pages) {
			$pageNo = $pages;
		}
		
		$yearMonth = $this->markdown->getYearMonthById($yearMonthId);
		$pageData = $this->markdown->getBlogsPageByYearMonth($yearMonthId, $pageNo, $pageSize);
		$pagination = $this->pager->splitPage($pages, $pageNo, $pageBarSize, "/archive/$yearMonthId/");

		foreach ($pagination['pageList'] as $key => $row) {
			if(in_array($lang, $lang_suffix)) {
				$pagination['pageList'][$key]['url'] = '/'.$lang.$row['url'];
			} 
		}
		if(in_array($lang, $lang_suffix)) {
			$pagination['prev']['url'] = empty($pagination['prev'])?"":'/'.$lang.$pagination['prev']['url'];
			$pagination['next']['url'] = empty($pagination['next'])?"":'/'.$lang.$pagination['next']['url'];
		} 
		foreach ($pageData['blogList'] as $key => $row) {
			if(in_array($lang, $lang_suffix)) {
				$pageData['blogList'][$key]['siteURL'] = '/'.$lang.$row['siteURL'];
			} 
		}
		
		$this->_view_data['pagination'] = $pagination;
		$this->_view_data['pageName'] = $this->lang->line('news_archive');
		$this->_view_data['yearMonthId'] = $yearMonthId;
		$this->_view_data['yearMonth'] = $yearMonth;
		$this->_view_data['pageNo'] = $pageNo;
		$this->_view_data['pages'] = $pageData['pages'];
		$this->_view_data['blogList'] = $pageData['blogList'];	
		return $this->load->view('news', $this->_view_data);	
	}
	
	//标签下的新闻列表
	public function tags($tagId, $pageNo=1) {
		if ($this->loadOutCache()) return;
		
		$this->pageName = "tags";
		
		$tagId = (int)$tagId;
		$pageNo = (int)$pageNo;
		$pageSize = $this->confObj['blog']['pageSize'];
		$pageBarSize = $this->confObj['blog']['pageBarSize'];
		
		$pages = $this->markdown->getTagTotalPages($tagId, $pageSize);
		
		if ($pageNo <= 0) {
			$pageNo = 1;
		}
		
		if ($pageNo > $pages) {
			$pageNo = $pages;
		}
		
		$tag = $this->markdown->getTagById($tagId);
		$pageData = $this->markdown->getBlogsPageByTag($tagId, $pageNo, $pageSize);
		$pagination = $this->pager->splitPage($pages, $pageNo, $pageBarSize, "/tags/$tagId/");
		
		$this->_view_data['pagination'] = $pagination;
		$this->_view_data['pageName'] = $this->lang->line('news_tag');
		$this->_view_data['tagId'] = $tagId;
		$this->_view_data['tag'] = $tag;
		$this->_view_data['pageNo'] = $pageNo;
		$this->_view_data['pages'] = $pageData['pages'];
		$this->_view_data['blogList'] = $pageData['blogList'];
		return $this->load->view('news', $this->_view_data);	
	}
	
	//首页，新闻列表
	public function page($pageNo=1, $lang) {
		@include(APPPATH.'config/domain.php');
		$lang = $this->uri->segment(1);
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "cn";
		}
		if ($this->loadOutCache()) return;
		
		$pageNo = (int)$pageNo;
		$pageSize = $this->confObj['blog']['pageSize'];
		$pageBarSize = $this->confObj['blog']['pageBarSize'];
		
		$pages = $this->markdown->getTotalPages($pageSize, $lang);
		
		if ($pageNo <= 0) {
			$pageNo = 1;
		}
		
		if ($pageNo > $pages) {
			$pageNo = $pages;
		}
		
		$pageData = $this->markdown->getBlogsByPage($pageNo, $pageSize, $lang);
		$pagination = $this->pager->splitPage($pages, $pageNo, $pageBarSize);
		foreach ($pagination['pageList'] as $key => $row) {
			if(in_array($lang, $lang_suffix)) {
				$pagination['pageList'][$key]['url'] = '/'.$lang.$row['url'];
			} 
		}
		if(in_array($lang, $lang_suffix)) {
			$pagination['prev']['url'] = empty($pagination['prev'])?"":'/'.$lang.$pagination['prev']['url'];
			$pagination['next']['url'] = empty($pagination['next'])?"":'/'.$lang.$pagination['next']['url'];
		} 
		foreach ($pageData['blogList'] as $key => $row) {
			if(in_array($lang, $lang_suffix)) {
				$pageData['blogList'][$key]['siteURL'] = '/'.$lang.$row['siteURL'];
			} 
		}
		$yearMonths = $this->markdown->getAllYearMonths();
		$yearMonth = $this->_array_sort($yearMonths,'id');

		$this->_view_data['yearMonths'] = $yearMonth;
		$this->_view_data['pagination'] = $pagination;
		$this->_view_data['pageName'] = $this->lang->line("news_home");	
		$this->_view_data['pageNo'] = $pageNo;
		$this->_view_data['pages'] = $pageData['pages'];	
		$this->_view_data['blogList'] = $pageData['blogList']; 
		$this->_view_data['none_article'] = $this->lang->line('none_article');
		return $this->load->view('news', $this->_view_data);
	}
	
	public function search() {
		$keyword = $this->input->get_post("keyword", TRUE);
		$keyword = trim($keyword);
		$blogList = array();
		
		$this->init();
		
		if (!empty($keyword)) {
			$blogList = $this->markdown->getBlogByTitle($keyword);
		}
		
		$this->_view_data['pageName'] = $this->lang->line('news_search');
		$this->_view_data['keyword'] = $keyword;
		$this->_view_data['blogList'] = $pageData['blogList'];
		return $this->load->view('news', $this->_view_data);	
	}
	
	//新闻详情页
	public function news($blogId=null) {
		@include(APPPATH.'config/domain.php');
		$lang = $this->uri->segment(1);
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "cn";
		}
		if ($this->loadOutCache()) return;

		if (!$blogId) {
			if($lang !== "en") {
				$url = uri_string();
				$openPage = "/" . substr($url, 3);
				$blogId = md5($openPage);
			} else {
				$openPage = "/" . uri_string();
				$blogId = md5($openPage);
			}
		}
		
		$blog = $this->markdown->getBlogById($blogId);
		
		$this->_view_data['pageName'] = $this->lang->line('news_detail_page');
		$this->_view_data['blog'] = $blog;
		$this->_view_data['title'] = $blog['title'];
		$this->_view_data['keywords'] = $blog['keywords'];
		$this->_view_data['desc'] = $blog['summary'];	

		return $this->load->view('blog-detail', $this->_view_data);
	}
	
	//feed.xml
	public function feed() {
		
		//加载必要的类库
		$this->init();
		
		//初始化新闻信息
		$this->_view_data['site'] = $this->yaml->getConfObject($this->configPath);
		
		return $this->load->view('feed', $this->_view_data);
		
	}
	
	//计算缓存Key
	private function getCacheKey() {
		return $this->confObj['theme'] . "_" . md5(uri_string()) . ".html"; //category/1460001917
	}

	//api
	public function api() {
		$pageNo = $this->input->get('page');
		$lang 	= $this->input->get('lang');
		@include(APPPATH.'config/domain.php');
		
		if ($this->loadOutCache()) return;
		
		$pageNo = (int)$pageNo;
		$pageSize = $this->confObj['blog']['pageSize'];
		$pageBarSize = $this->confObj['blog']['pageBarSize'];
		
		$pages = $this->markdown->getTotalPages($pageSize, $lang);
		
		if ($pageNo <= 0) {
			$pageNo = 1;
		}
		
		if ($pageNo > $pages) {
			$pageNo = $pages;
		}
		
		$pageData = $this->markdown->getBlogsByPage($pageNo, $pageSize, $lang);
		$pagination = $this->pager->splitPage($pages, $pageNo, $pageBarSize);
		foreach ($pagination['pageList'] as $key => $row) {
			if(in_array($lang, $lang_suffix)) {
				$pagination['pageList'][$key]['url'] = '/'.$lang.$row['url'];
			} 
		}
		if(in_array($lang, $lang_suffix)) {
			$pagination['prev']['url'] = empty($pagination['prev'])?"":'/'.$lang.$pagination['prev']['url'];
			$pagination['next']['url'] = empty($pagination['next'])?"":'/'.$lang.$pagination['next']['url'];
		} 
		foreach ($pageData['blogList'] as $key => $row) {
			if(in_array($lang, $lang_suffix)) {
				$pageData['blogList'][$key]['siteURL'] = '/'.$lang.$row['siteURL'];
			} 
		}
		
		$this->_view_datas['pagination'] = $pagination;
		$this->_view_datas['pageName'] = $this->lang->line("news_home");	
		$this->_view_datas['pageNo'] = $pageNo;
		$this->_view_datas['pages'] = $pageData['pages'];	
		$this->_view_datas['blogList'] = $pageData['blogList']; 
		print_r(json_encode($this->_view_datas));
	}

	public function detail() {
		$blogId = $this->input->get("blogId");
		@include(APPPATH.'config/domain.php');
		$lang = $this->uri->segment(1);
		if(in_array($lang, $lang_suffix)) {
			$lang = $this->uri->segment(1);
		} else {
			$lang = "cn";
		}
		if ($this->loadOutCache()) return;

		if (!$blogId) {
			if($lang !== "en") {
				$url = uri_string();
				$openPage = "/" . substr($url, 3);
				$blogId = md5($openPage);
			} else {
				$openPage = "/" . uri_string();
				$blogId = md5($openPage);
			}
		}
		
		$blog = $this->markdown->getBlogById($blogId);
		
		$this->_view_datas['pageName'] = $this->lang->line('news_detail_page');
		$this->_view_datas['blog'] = $blog;
		$this->_view_datas['title'] = $blog['title'];
		$this->_view_datas['keywords'] = $blog['keywords'];
		$this->_view_datas['desc'] = $blog['summary'];	
		print_r(json_encode($this->_view_datas));
		
	}

	private function _array_sort($arr,$keys,$type='desc'){ 
		$keysvalue = $new_array = array();
		foreach ($arr as $k=>$v) {
			$keysvalue[$k] = $v[$keys];
		}
		if($type == 'asc') {
			asort($keysvalue);
		} else {
			arsort($keysvalue);
		}
		reset($keysvalue);
		foreach ($keysvalue as $k=>$v) {
			$new_array[$k] = $arr[$k];
		}
		return $new_array; 
	}
	

}

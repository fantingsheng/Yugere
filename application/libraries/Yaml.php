<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party/spyc/Spyc.php';

class Yaml {
	
	public function load($filePath) {
		return Spyc::YAMLLoad($filePath);
    }
    
    public function dump($array) {
        return Spyc::YAMLDump($array, 4);
    }
    
    public function getConfObject($filePath) {
    	$confObj = $this->load($filePath);
    	if (isset($confObj['text']['intro']) && is_array($confObj['text']['intro'])) {
    		$confObj['text']['intro'] = implode("", $confObj['text']['intro']);
    	}
    	
    	$defaultConf = array(
    		"url" => "www.slightech.com/",
    		"title" => "轻客新闻",
    		"subtitle" => "欢迎关注轻客新闻",
    		"theme" => "simple",	
            "enableCache" => true,
    		"highlight" => true,
    		"mathjax" => false,
    		"duoshuo" => "",
    		"baiduAnalytics" => "",
    		"keywords" => "小觅, 私生活, 智能穿戴, 智能家居",
    		"description" => "了解轻客动态",
    		"version" => "2.1",
    		"author" => array(
    			"name" => "Slightech",
    			"email" => "admin@slightech.com",
    			"github" => "",
    			"weibo" => "轻客",
    			"avatar" => ""
    		),
    		"blog" => array(
    			"recentSize" => 5,
    			"pageSize" => 6,
    			"pageBarSize" => 5,
    			"allBlogsForPage" => true 
    		),
    		"text" => array(
    			"title" => "新闻",
    			"intro" => "轻客新闻"
    		)
    	);
    	
    	$conf = array();
    	
    	foreach ($defaultConf as $k => $val) {
    		if(isset($confObj[$k])) {
    			if (is_array($confObj[$k]) && is_array($val)) {
    				$conf[$k] = array_merge($val, $confObj[$k]);
    			} else {
    				$conf[$k] = $confObj[$k];
    			}
    		} else {
    			$conf[$k] = $val;
    		}
    	}
    	return $conf;
    }
}

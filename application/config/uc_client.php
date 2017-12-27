<?php
define('UC_CONNECT', NULL);							// 连接 UCenter 的方式: mysql/NULL, 默认为空时为 fscoketopen()

//数据库相关 (mysql 连接时, 并且没有设置 UC_DBLINK 时, 需要配置以下变量)
// define('UC_DBHOST', 'localhost');					// UCenter 数据库主机
// define('UC_DBUSER', 'root');							// UCenter 数据库用户名
// define('UC_DBPW', '');								// UCenter 数据库密码
// define('UC_DBNAME', 'bbs');							// UCenter 数据库名称
// define('UC_DBCHARSET', 'utf-8');						// UCenter 数据库字符集
// define('UC_DBTABLEPRE', 'bbs.frm_ucenter_');			// UCenter 数据库表前缀

//通信相关

define('UC_KEY', '197bxyYwFv08FiSFjyAltLejUxcf0xWE8O7wvEw');
define('UC_API', 'http://forum.slightech.com/uc_server');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '');
define('UC_APPID', '8');

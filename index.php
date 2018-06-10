<?php
require_once dirname(__FILE__).'/zyro/functions.inc.php';
if (!isHttps() && !headers_sent()) {
	header('Status: 301 Moved Permanently');
	list($host) = explode(':', $_SERVER['HTTP_HOST']);
	header('Location: https://'.getCurrUrl(true));
	exit();
}
include dirname(__FILE__).'/zyro/index.php';
?>
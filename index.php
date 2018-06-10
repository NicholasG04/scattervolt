<?php
	error_reporting(E_ALL); @ini_set('display_errors', true);
	@session_start();
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'Home', 'file' => '1.php','controllers' => array()),
		'1'	=> array('id' => '3', 'alias' => 'Contact-Me', 'file' => '3.php','controllers' => array()),
		'2'	=> array('id' => '6', 'alias' => 'Discord-Applications', 'file' => '6.php','controllers' => array()),
		'3'	=> array('id' => '8', 'alias' => 'Super-Smash-Builds', 'file' => '8.php','controllers' => array()),
		'4'	=> array('id' => '7', 'alias' => 'Moderator-Application', 'file' => '7.php','controllers' => array()),
		'5'	=> array('id' => '2', 'alias' => 'Tech-Support-Application', 'file' => '2.php','controllers' => array()),
		'6'	=> array('id' => '4', 'alias' => 'Programmer-Application', 'file' => '4.php','controllers' => array()),
		'7'	=> array('id' => '5', 'alias' => 'YouTuber/Streamer-Application', 'file' => '5.php','controllers' => array())
	);
	$forms = array(
		'3'	=> array(
			'8e3c8b8b' => Array( 'email' => 'contact@scattervolt.com', 'emailFrom' => '', 'subject' => 'Contact Form Submission', 'sentMessage' => 'Form was sent.', 'object' => '', 'objectRenderer' => '', 'loggingHandler' => '', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'recSiteKey' => null, 'recSecretKey' => null, 'maxFileSizeTotal' => '2', 'fields' => array( array( 'fidx' => '0', 'name' => 'Name', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Country', 'type' => 'input', 'options' => '' ), array( 'fidx' => '3', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ), array( 'fidx' => '4', 'name' => 'Attachments', 'type' => 'file', 'options' => '' ) ) )
		)
	);
	$langs = null;
	$def_lang = null;
	$base_lang = 'en';
	$site_id = "ef1d54f2";
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'scattervolt.com';
	$show_comments = false;
	require_once dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang, $urlArgs, $route) = parse_uri();
	$user_key = "CTqL4ZlBQlDCJHSEfPZk";
	$user_hash = "5955cea5c308d654";
	$comment_callback = "http://uk.zyro.com/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if ($page && $page['id'] == $home_page && $route) {
		header('Location: '.$base_url.(($lang && $lang != $def_lang) ? (($mod_rewrite ? '' : '?route=').$lang.'/') : ''), true, 301);
	}
	$hr_out = '';
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $ln => $default) {
					$pageUri = getPageUri($page['id'], $ln);
					$out = str_replace(urlencode('{{lang_'.$ln.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$baseUrl = (isHttps() ? 'https' : 'http').'://'.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost').'/';
			$out = str_replace('{{base_url}}', $baseUrl, $out);
			$out = str_replace('{{curr_url}}', $baseUrl.($lang && $lang != $def_lang ? $lang.'/' : '').$route, $out);
			$out = str_replace('{{hr_out}}', $hr_out, $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>
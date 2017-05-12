<?php
include( 'config.php' );
include( 'saetv2.ex.class.php' );
include '../config.php';

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
		die($e);
		header('location:'.$system[0]['yuming']);
	}
}
if ($token) {
	$_SESSION['weibo_token'] = $token['access_token'];
	echo 'login...';
	header('location:'.$system[0]['yuming'].'sync_login.php?a=sina&t='.$_SESSION['weibo_token']);
	die();
	
?>
<!--授权完成,<a href="weibolist.php">进入你的微博列表页面</a><br />-->
<?php
} else {
?>
授权失败。
<?php
}
?>

<?php /* Smarty version Smarty3-b8, created on 2016-10-15 05:58:39
         compiled from "D:\nginx/www/share/somethingmusic/templates/template/gray\login.html" */ ?>
<?php /*%%SmartyHeaderCode:193025801c58fb0ccc1-76527879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4896fe59c2bd073891cb1a8fd72e7c0453da86' => 
    array (
      0 => 'D:\\nginx/www/share/somethingmusic/templates/template/gray\\login.html',
      1 => 1475212184,
    ),
  ),
  'nocache_hash' => '193025801c58fb0ccc1-76527879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--登录部分-->
<div class="login" uid="<?php echo $_smarty_tpl->getVariable('uid')->value;?>
">


<?php if ($_smarty_tpl->getVariable('active')->value=='api'){?>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
api.php?skin=gray&action=user&mod=index" title="个人主页">个人主页</a>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
api.php?skin=gray&action=user&mod=album_list" title="音乐分享">音乐分享</a>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
logout.php?skin=gray" title="退出" onclick="return confirm('亲，你真的要退出吗？')">退出</a>
<?php }?>
<!--
<?php if (!$_smarty_tpl->getVariable('qq')->value&&!$_smarty_tpl->getVariable('libmill')->value&&!$_smarty_tpl->getVariable('sina')->value){?>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
qq/oauth/qq_login.php?skin=gray" title="使用QQ帐号登录"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/qq.png" border="0" align="top" width="76" height="23"/></a>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
sina/?skin=gray" title="使用新浪微博帐号登录"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/sina.png" border="0" align="top" width="105" height="23"/></a>
<?php }else{ ?>

<?php if (!$_smarty_tpl->getVariable('sync_qq')->value){?>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
qq/oauth/qq_login.php?skin=gray" title="同步QQ帐号"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/qq_sync.png" border="0" align="top" width="76" height="23"/></a>
<?php }?>
<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
sina/?skin=gray" title="同步新浪微博"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/sina_sync.png" border="0" align="top" width="105" height="23"/></a>
<?php }?>
-->

<a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
index.php?skin=deafault">旧版皮肤</a>

</div>
<?php /* Smarty version Smarty3-b8, created on 2012-09-06 17:16:00
         compiled from "F:\htdocs\smu/admin/templates/template/right.html" */ ?>
<?php /*%%SmartyHeaderCode:166175048da50a4d0b9-05047378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afaff4471ca63819a1a6bc98a30820ceda2cdc4d' => 
    array (
      0 => 'F:\\htdocs\\smu/admin/templates/template/right.html',
      1 => 1343982345,
    ),
  ),
  'nocache_hash' => '166175048da50a4d0b9-05047378',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="templates/template/css.css" type="text/css" />
</head><body>
<div class="main_right">
<div class="title"><img src="templates/template/images/ico_clew_yes.gif" border="0"/>&nbsp;<a>服务器信息</a></div>
<table cellspacing="0">
<tr><td class="table_left">操作系统：</td><td><?php echo $_smarty_tpl->getVariable('operatersystem')->value;?>
</td></tr>
<tr><td class="table_left">服务器运行方式：</td><td><?php echo $_smarty_tpl->getVariable('cgi')->value;?>
</td></tr>
<tr><td class="table_left">PHP版本：</td><td><?php echo $_smarty_tpl->getVariable('phpversion')->value;?>
</td></tr>
<tr><td class="table_left">MySQL版本：</td><td><?php echo $_smarty_tpl->getVariable('mysql_version')->value;?>
</td></tr>
<tr><td class="table_left">Apache版本：</td><td><?php echo $_smarty_tpl->getVariable('software')->value;?>
</td></tr>
</table>
<div class="title"><img src="templates/template/images/ico_clew_yes.gif" border="0"/>&nbsp;<a>系统信息</a></div>
<table cellspacing="0">
<tr><td class="table_left">网站访问统计：</td><td><?php echo $_smarty_tpl->getVariable('webcount')->value;?>
</td></tr>
<tr><td class="table_left">专辑总数：</td><td><?php echo $_smarty_tpl->getVariable('album')->value;?>
</td></tr>
<tr><td class="table_left">歌曲总数：</td><td><?php echo $_smarty_tpl->getVariable('music')->value;?>
</td></tr>
<tr><td class="table_left">文件服务器总数：</td><td><?php echo $_smarty_tpl->getVariable('server')->value;?>
</td></tr>
<tr><td class="table_left">评论条数：</td><td><?php echo $_smarty_tpl->getVariable('comment')->value;?>
</td></tr>
</table>
</div>
</body>
</html>
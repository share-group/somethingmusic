<?php /* Smarty version Smarty3-b8, created on 2013-10-16 20:54:37
         compiled from "E:\htdocs\music/admin/templates/template/add_artist.html" */ ?>
<?php /*%%SmartyHeaderCode:28872525e8c8d4bd1b0-47088473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48cba15a20b6c53294023995707ec9d880ea03db' => 
    array (
      0 => 'E:\\htdocs\\music/admin/templates/template/add_artist.html',
      1 => 1343982346,
    ),
  ),
  'nocache_hash' => '28872525e8c8d4bd1b0-47088473',
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
<script type="text/javascript" src="../kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="templates/template/jquery-1.4a2.js"></script>
<title>添加音乐人</title>
</head>
<style>
input {
	border:#bbbbbb 1px solid;
}
.highlight {
	border:#F00 1px solid
}
</style>
<script type="text/javascript">
function removeMyClass(id_or_class)
{

	$(id_or_class).click(function(){

		$(this).removeClass('highlight');

		});

}
$(document).ready(function(){
	$('#submit').click(function(){
		if($('#name').val()=='')
		{
			$('#name').addClass('highlight');
			alert('音乐人姓名为空');
			return false;
		}
		if($('#area').val()=='')
		{
			$('#area').addClass('highlight');
			alert('地区为空');
			return false;
		}
		if($('#pic').val()=='')
		{
			$('#pic').addClass('highlight');
			alert('图片未上传');
			return false;
		}
		if($('#introduce').val()=='')
		{
			$('#introduce').addClass('highlight');
			alert('音乐人介绍为空');
			return false;
		}
	})

removeMyClass('#name');
removeMyClass('#pic');
removeMyClass('#area');
removeMyClass('#introduce');
})

KE.show({
				id : 'introduce',
				items : [
		'source',  'undo', 'redo', 'cut', 'copy', 'paste',
		'plainpaste', 'wordpaste','justifyleft', 'justifycenter', 'justifyright',
		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
		'superscript', 
		'title', 'fontname', 'fontsize','textcolor', 'bgcolor', 'bold',
		'italic', 'underline', 'strikethrough', 'removeformat','image',
		'flash', 'media'
	],
				 
				afterCreate : function(id) {
					KE.event.ctrl(document, 13, function() {
						KE.util.setData(id);
						document.forms['example'].submit();
					});
					KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
						KE.util.setData(id);
						document.forms['example'].submit();
					});
				}
			});


</script>
<body>
<div class="main_right">
  <div class="title"><img src="templates/template/images/ico_clew_yes.gif" border="0"/>&nbsp;<a>添加音乐人</a></div>
  <table cellpadding="0">
    <form action="add_artist.php?action=add_artist" method="post" enctype="multipart/form-data">
      <tr>
        <td class="table_left">音乐人姓名：</td>
        <td><input class="text" type="text" name="name" id="name"/></td>
      </tr>
      <tr>
        <td class="table_left">地区：</td>
        <td><select name="area" id="area">
            <option value="">----请选择----</option>
            <option value="1">香港</option>
            <option value="2">台湾</option>
            <option value="3">日本</option>
            <option value="4">韩国</option>
            <option value="5">欧美</option>
            <option value="6">大陆</option>
            <option value="8">菲律宾</option>
            <option value="9">马来西亚</option>
            <option value="10">新加坡</option>
            <option value="11">其他</option>
          </select></td>
      </tr>
      <tr>
        <td class="table_left">音乐人头像：<font>（190*190）</font></td>
        <td><input name="pic" type="file" class="text" style="cursor:pointer" id="pic">
          </input></td>
      </tr>
      <tr>
        <td class="table_left">音乐人介绍：</td>
        <td><textarea name="introduce" style="width:100%;height:300px;display:block;" id="introduce"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" class="button" value="添   加" id="submit"/></td>
      </tr>
    </form>
  </table>
</div>
<div class="main_right">
  <div class="title"><img src="templates/template/images/ico_clew_yes.gif" border="0"/>&nbsp;<a>已有音乐人</a></div>
  <table cellspacing="0">
    <tr align="center" class="bold">
      <td>编号</td>
      <td>音乐人</td>
      <td>地区</td>
      <td>操作</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('artist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
?>
    <tr align="center">
      <td><?php echo $_smarty_tpl->getVariable('s')->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->getVariable('s')->value['name'];?>
</td>
      <td><?php echo $_smarty_tpl->getVariable('s')->value['area'];?>
</td>
      <td><a href="add_artist.php?action=look&&id=<?php echo $_smarty_tpl->getVariable('s')->value['id'];?>
">查看</a>  <a href="add_artist.php?action=deleted&id=<?php echo $_smarty_tpl->getVariable('s')->value['id'];?>
" onclick="return confirm('你真的要删除吗？');">删除</a></td>
    </tr>
    <?php }} ?>
    <?php if ($_smarty_tpl->getVariable('str')->value!=''){?>
    <tr><td colspan="5" class="showpage" align="center"><?php echo $_smarty_tpl->getVariable('str')->value;?>
</td></tr>
    <?php }?>
  </table>
</div>
</body>
</html>
<style>
table tr td a {
	color:#09F;
	text-decoration:underline;
	line-height:20px
}
table tr td a:hover {
	color:#F00;
	font-weight:bold;
	text-decoration:none
}
.look {
	text-align:left
}
.look a {
	margin-left:20px;
	margin-top:10px
}
</style>

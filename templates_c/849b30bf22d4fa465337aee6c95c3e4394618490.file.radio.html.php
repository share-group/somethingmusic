<?php /* Smarty version Smarty3-b8, created on 2016-09-20 21:22:32
         compiled from "D:\nginx/www/share.git/somethingmusic/templates/template/gray\radio.html" */ ?>
<?php /*%%SmartyHeaderCode:1190057e13818c13691-58973052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849b30bf22d4fa465337aee6c95c3e4394618490' => 
    array (
      0 => 'D:\\nginx/www/share.git/somethingmusic/templates/template/gray\\radio.html',
      1 => 1343982380,
    ),
  ),
  'nocache_hash' => '1190057e13818c13691-58973052',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/css/css.css?20120212" type="text/css" />
<!--[if IE 6]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/css/ie6.css?20120212" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/js/DD_belatedPNG_0.0.8a.js?20120212"></script><script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/js/jquery-1.5.1.min.js?20120212"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/js/radio.js?20120212"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/js/jquery.jplayer.js?20120212"></script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
favicon.ico"/>
<title>somethingmusic - 音乐电台我们一直在努力！</title>
</head>
<body>
<div id="jquery_jplayer"></div>
<div class="login" uid="<?php echo $_smarty_tpl->getVariable('uid')->value;?>
"></div>
<div id="init_song" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
"></div>
<div class="pms"></div>
<div class="body">
  <div class="header"> 
    <!--logo-->
    <div class="logo"><a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
?skin=gray" title="<?php echo $_smarty_tpl->getVariable('web_title')->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/logo.png" border="0"/></a></div>
    <!--搜索框-->
    <div class="search">
      <form action="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
search.php?skin=gray&action=search" method="post">
        <input type="text" class="search_input" id="search_input" name="search_input" onclick="value=''" autocomplete="off" <?php if ($_smarty_tpl->getVariable('key_words')->value){?>value="<?php echo $_smarty_tpl->getVariable('key_words')->value;?>
"<?php }?> x-webkit-speech lang="zh-CN" x-webkit-grammar="bUIltin:search"/>
        <div id="submit" title="搜！">
          <input type="image" src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/search.png" width="24" height="24" id="search_submit"/>
        </div>
        <div class="result"></div>
      </form>
    </div>
    <!--顶部链接-->
    <div class="top">
      <ul>
        <a href="http://vod.libmill.com" target="_blank">
        <li class="vod" title="视频点播">视频点播</li>
        </a> <a href="http://libmill.com" target="_blank">
        <li class="dh" title="校内导航">校内导航</li>
        </a> <a href="http://lib.gcu.edu.cn" target="_blank">
        <li class="lib" title="图书馆">图书馆</li>
        </a> <a href="http://www.gcu.edu.cn" target="_blank">
        <li class="gzauto" title="学院主页">学院主页</li>
        </a>
      </ul>
    </div>
  </div>
</div>
<div style="height:60px;"></div>
<div class="radio">
  <div class="p">
    <div><?php echo $_smarty_tpl->getVariable('sjy')->value;?>
</div>
  </div>
  <div class="radio_body">
    <div class="radio_core">
      <div class="radio_pic"><embed src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/buffering.swf" width="190" height="190"></embed></div>
      <div class="radio_right_top">
        <div class="radio_right_top_title"><span class="song_title"></span><span class="songer"></span></div>
        <div class="radio_right_top_album" this_id="">加载中...</div>
        <div class="radio_right_middle">
          <div class="radio_play" title="播放"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/radio_play.png"/></div>
          <div class="radio_pause" title="暂停"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/radio_pause.png"/></div>
          <div class="radio_next" title="下一首"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/radio_next.png"/></div>
          <div id="player_progres">
            <div id="player_progress_load_bar" class="jqjp_buffer">
              <div id="player_progress_play_bar"></div>
            </div>
            <div id="play_time"></div>
          </div>
        </div>
        <div class="radio_right_bottom"><font>分享到</font>&nbsp;&nbsp;<a href="javascript:(function(){ window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+ encodeURIComponent('<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'))+'&pic='+$('.radio_pic img').attr('src')+'&title=somethingmusic音乐电台&desc='+encodeURIComponent('亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！'),'_blank'); } )()" title="分享到QQ空间"><img src="http://ctc.qzonestyle.gtimg.cn/qzonestyle/qzone_client_v5/img/favicon.ico" alt="分享到QQ空间" align="absmiddle" width="16" height="16" border="0"/></a> <a href="javascript:void(0);" onclick="window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url='+encodeURIComponent('<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'))+'&title=somethingmusic音乐电台&desc=亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！');return false;" title="分享到腾讯朋友"><img src="http://qzonestyle.gtimg.cn/ac/qzone_v5/app/qzshare/xy-icon.png" alt="分享到腾讯朋友" width="16" height="16" border="0" align="absmiddle" /></a> <a href="javascript:void(0)" onclick="postToWb();" style="height:16px;font-size:12px;line-height:16px;" title="分享到腾讯微博"><img src="http://v.t.qq.com/share/images/s/weiboicon16.png" align="absmiddle" border="0" width="16" height="16"/></a><script type="text/javascript">function postToWb(){ var _t = encodeURI(document.title);var _url = encodeURIComponent('<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'));var _appkey = encodeURI("appkey");var _pic = encodeURI($('.radio_pic img').attr('src'));var _site = '<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
';var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+$('.radio_pic img').attr('src')+'&title=亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！';window.open( _u,'', 'width=630, height=480, top=100, left=100, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' ); }</script> 
          <a rel="nofollow" class="fav_douban" href="javascript:void(function() { var%20d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:'',r='http://www.douban.com/recommend/?url='+e('<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'))+'&title='+e('亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！')+'& sel='+e(s)+'&v=1',x=function() { if(!window.open(r,'douban','toolbar=0,resizable=1,scrollbars=yes,status=1,width=620,height=360'))location.href=r+'&amp;r=1' } ;if(/Firefox/.test(navigator.userAgent)) { setTimeout(x,0) } else { x() } } )()" title="分享到豆瓣音乐"><img src="http://img3.douban.com/favicon.ico" alt="分享到豆瓣音乐" width="16" height="16" border="0" align="absmiddle"/></a> <a href="javascript:(function() { window.open('http://v.t.sina.com.cn/share/share.php?appkey=<?php echo $_smarty_tpl->getVariable('sina_appid')->value;?>
&title=亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！&url='+encodeURIComponent('<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'))+'&source=bookmark&pic='+$('.radio_pic img').attr('src'),'_blank','width=620,height=350'); } )()" title="分享到新浪微博"><img src="http://t.sina.com.cn/favicon.ico"  alt="分享到新浪微博" border="0" width="16" height="16" align="absmiddle"></a> <a hidefocus="true" href="javascript:window.open('http://www.kaixin001.com/repaste/share.php?rtitle='+encodeURIComponent('亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').val()+'》，你也快来听听吧！)+'&amp;rurl='+encodeURIComponent('<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'))+'&amp;rcontent=亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！,'_blank','scrollbars=no,width=600,height=450,left=75,top=20,status=no,resizable=yes'); void 0" onclick="ad_c_m('bbs_pageshare_kaixin001')" id="fx_kx" title="分享到开心网"><img src="http://img1.kaixin001.com.cn/i/favicon.ico" alt="分享到开心网" border="0" height="16" width="16" align="absmiddle"/></a> <a href="javascript:void((function(s,d,e) { if(/xiaonei\.com/.test(d.location))return;var%20f='http://share.xiaonei.com/share/buttonshare.do?link=',u='<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
radio.php?skin=gray&channel='+$('.current').attr('radio')+'&id='+$('.radio_right_top_album').attr('this_id'),l='亲！我正在somethingmusic音乐电台收听'+$('.current').attr('cn')+'的《'+$('.song_title').html()+'》——'+$('.songer').html()+'，你也快来听听吧！',p=[e(u),'&amp;title=',e(l)].join('');function%20a() { if(!window.open([f,p].join(''),'xnshare',['toolbar=0,status=0,resizable=1,width=636,height=446,left=',(s.width-636)/2,',top=',(s.height-446)/2].join('')))u.href=[f,p].join(''); } ;if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a(); } )(screen,document,encodeURIComponent));" title="分享人人网"><img src="http://s.xnimg.cn/favicon-rr.ico" alt="分享人人网" border="0" height="16" width="16" align="absmiddle"></a></div>
        <div class="channel">
          <div class="left">
            <ul class="channel_list">
              <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channel')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
              <?php if ($_smarty_tpl->getVariable('k')->value+1==$_smarty_tpl->getVariable('num')->value&&!$_smarty_tpl->getVariable('uid')->value){?>
              <li class="<?php if ($_smarty_tpl->getVariable('c')->value['id']==$_smarty_tpl->getVariable('channel_id')->value){?>current<?php }else{ ?> common<?php }?> <?php if ($_smarty_tpl->getVariable('num')->value==$_smarty_tpl->getVariable('k')->value+1){?> last_channel<?php }?>" channel="<?php echo $_smarty_tpl->getVariable('c')->value['en_name'];?>
" cn="<?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
频道" radio="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
频道</li>
              <?php }else{ ?> <li<?php if ($_smarty_tpl->getVariable('c')->value['id']==$_smarty_tpl->getVariable('channel_id')->value){?> class="current"<?php }else{ ?> class="common"<?php }?> channel="<?php echo $_smarty_tpl->getVariable('c')->value['en_name'];?>
" cn="<?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
频道" radio="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
频道
              </li>
              <?php }?>
              <?php }} ?>
              <?php if ($_smarty_tpl->getVariable('uid')->value){?>
              <li class="<?php if (9999999==$_smarty_tpl->getVariable('channel_id')->value){?>current<?php }else{ ?> common last_channel<?php }?>" channel="self" cn="我的私人频道" radio="9999999">我的私人频道</li>
              <?php }?>
            </ul>
          </div>
          <div class="right" id="change">换台</div>
          <div class="right" id="close">换台</div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<br/>
<div class="body">
  <div class="foot"><img src="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
templates/template/gray/images/foot.png" width="960" height="15" border="0"/><br/>
    <br/>
    <a href="http://dh.gcu.edu.cn" title="校内导航" target="_blank">校内导航</a> | <a href="http://vod.libmill.com" title="视频点播" target="_blank">视频点播</a> | <a href="http://dh.gcu.edu.cn/join" target="_blank" title="加入极品飞车坊">加入我们</a><br/>
    Copyright &copy; 2009 - <?php echo $_smarty_tpl->getVariable('current_time')->value;?>
 飞车坊音乐电台 All Rights Resevers  粤ICP备10029708号<br/>
    Powered by <a href="http://weibo.com/u/1845562271" title="关注飞车坊的微博！" target="_blank">极品飞车坊</a></div>
</div>
<div style="display:none">
<script src="http://s25.cnzz.com/stat.php?id=4029524&web_id=4029524" language="JavaScript"></script>
</body>
</html>
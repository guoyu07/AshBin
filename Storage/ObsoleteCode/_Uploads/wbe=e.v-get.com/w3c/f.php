<?php $QC=mysql_connect('localhost','i0oRvne8l2j1Vm','w3GeTxOgI0oq');mysql_select_db('ve',$QC);mysql_query('set names utf8');$L=$_GET['l']; $L=preg_replace('/[\\\'\"=\(\);]/',' ',$L); $Qq=mysql_query('SELECT * FROM w3c WHERE l="'.$L.'" LIMIT 1',$QC);$Qa=mysql_fetch_array($Qq);$Qr=mysql_num_rows($Qq);if($Qr==0){header('HTTP/1.1 404 Not Found');exit();}$A=$Qa['a'];$G=$Qa['g'];$H=$Qa['h'];$K=$Qa['k'];$D=$Qa['d'];$F=$Qa['f'];?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link href="http://tu.v-get.com/i.css" rel="stylesheet" type="text/css" /><link href="http://tu.v-get.com/8/i.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="http://tu.v-get.com//f.css" /><link rel="stylesheet" type="text/css" href="http://tu.v-get.com/8/tech/f.css" /><head><title><?php echo $H,'_W3CSchool 在线教程_V-Get!</title><meta name="keywords" content="'.$K.'"/><meta name="description" content="'.$D.'"/>';?></head><body><div class="t"><strong>V-Get! <a href="http://e.v-get.com/z/">网站地图</a><a href="http://e.v-get.com/w3c/">W3C</a><a href="http://e.v-get.com/w3cschool/">W3CSchool</a></strong><span><a href="http://e.v-get.com/js/"><img src="http://tu.v-get.com/g/ft1.gif" alt="微推荐"/></a>|<a href="http://e.v-get.com/i/">站长论坛</a>|<a href="http://e.v-get.com/services/">代理分销</a>|<a href="http://e.v-get.com/open/">网站开源</a>|<a href="http://m.e.v-get.com/">手机版</a></span></div><div class="w"><div class="u"><div class="p i"></div><div class="q g"><div class="s"><form action="http://e.v-get.com/s" target="_blank"><div class="p"><input type="radio" name="ie" checked="checked"/><label>百度</label><input type="radio" name="ie" value="utf-8"/><label>有趣</label></div><div class="q"><input type="text" placeholder="请输入关键词" class="sk" name="sk"/><input class="ss" type="submit" value=""/></div></form></div></div><div class="o"></div></div><div id="n"><div id="na"><a href="http://e.v-get.com/">首页</a><i></i><a href="http://e.v-get.com/tech/">站长之家</a><i></i><a href="http://e.v-get.com/web/">网站建设</a><i></i><a href="http://e.v-get.com/host/">主机域名</a><i></i><a href="http://e.v-get.com/sem/">网络营销</a><i></i><a href="http://e.v-get.com/soho/">SOHO托管</a><i></i><a href="http://e.v-get.com/vi/">网站美工</a><i></i><a href="http://e.v-get.com/w3c/">编程手册</a><i></i><a href="http://e.v-get.com/tool/">站长工具</a></div></div><div class="o mh"></div><div class="mg a960x60"><script type="text/javascript">var cpro_id="u1248199"</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script></div><div class="v"><div class="m mb">您的位置：<a href="http://e.v-get.com/">首页</a>&nbsp;&gt;&nbsp;<a href="http://e.v-get.com/w3c/">W3CSchool 在线教程</a><?php echo '&nbsp;&gt;&nbsp;<a href="http://e.v-get.com/w3c/',$A,'.html">',$A,'</a>&nbsp;&gt;&nbsp;',$G,'<span></span></div><div class="o"></div><div class="l"><div class="c"><h1>',$H,'</h1><div class="ct"><div id="bdshare"></div></div><div id="d"></div><div class="o mh"></div>
<div id="c">',$Qa['f'],'<p>W3CSchool 在线教程 中HTML代码可以与<a href="http://e.v-get.com/tool/html_editor.html">HTML 在线编辑器</a>配合学习。</p><p>作者观点与本站无关，转载需保留E维科技及本文链接，并获得<a href="http://e.v-get.com/tech/">本站</a>授权。未经授权，严禁转载！</p></div>';$aK=explode(',',$K);echo '<div class="ck">';
foreach($aK as $akey=>$k){echo '<a href="http://e.v-get.com/s?se=w3c&sk=',$k,'">',str_replace('%2B','+',$k),'</a>';}
echo '<i>(网络编辑：<a href="http://e.v-get.com/tech/u/',$A,'_1.html">',$A,'</a>)</i></div>';?></div><div class="ds-thread"></div><div id="hm_t_3749"></div></div><div class="r"></div><div class="o mh"></div></div><div class="b"><p class="bn"><a href="http://e.v-get.com/z/about.html">关于我们</a>|<a href="http://e.v-get.com/i/">站长论坛</a>|<a href="#">合作分销</a>|<a href="#">人才招聘</a>|<a href="http://e.v-get.com/z/link.html">友情链接</a>|<a href|<a href="#">合作加盟</a>|<a href="#">广告服务</a>|<a href="#">合作伙伴</a>|<a href="http://e.v-get.com/i/topic-56-1.html">投诉建议</a>|<a href="http://e.v-get.com/z/">网站地图</a>|<a href="http://m.e.v-get.com/">手机浏览</a></p><p><a href="http://e.v-get.com/">E维科技</a> 版权所有</p><p>Copyright &copy; 2008-2013<a href="http://www.v-get.com/">V-Get.com</a>All Rights Reserved.</p></div></div><script type="text/javascript" src="http://tu.v-get.com/i.js"></script><div class="pn"><script type="text/javascript">J("http://tu.v-get.com/8/i.js");J("http://tu.v-get.com/f.js");var duoshuoQuery={short_name:"ev-get"};J("http://static.duoshuo.com/embed.js",function(s){s.async=I;s.charset="UTF-8"});var _bdhmProtocol=(("https:"== document.location.protocol)?" https://":" http://");document.write(unescape("%3Cscript src='"+_bdhmProtocol+"hm.baidu.com/h.js%3F2cdfc5c1af66f6603163203248653a5e' type='text/javascript'%3E%3C/script%3E"));</script></div></body></html>
<?php $Qc=mysql_connect('localhost','GSco9cm30x1','Bt49cE3ox02K');mysql_select_db('vwuliu',$Qc);mysql_query('set names utf8');$lk=$_GET['l'];$LK=explode('.',$lk);$E=$LK[0];$Qq=mysql_query('SELECT b,h,he,k,m,d,a,g,l,r,q,lk,lt,x,y,z,zz,t,adt,tj,bg FROM co WHERE e="'.$E.'" LIMIT 1');$Qr=mysql_num_rows($Qq);if($Qr==0){header('Location: http://wuliu.v-get.com/');exit();}$Qa=mysql_fetch_array($Qq);$B=$Qa['b'];$H=$Qa['h'];$K=$Qa['k'];$Z=$Qa['z'];$LT=$Qa['lt'];$TA=$Qa['adt'];$now=time();$ad=($TA>$now)?false:true;echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>',$H,'主营',$Z,'_商务物流网_V-Get!','</title><meta name="keywords" content="',$K,'" /><meta name="description" content="',$Qa['d'],'"/>';?><link href="http://tu.v-get.com/i.css" type="text/css" rel="stylesheet" /><link href="http://tu.v-get.com/3/co/i.css" type="text/css" rel="stylesheet"/><script type="text/javascript" src="http://tu.v-get.com/i.js"></script></head><body><div id="t"><div class="po"><a href="http://wuliu.v-get.com/">商务物流网</a>-<?php echo $LT,'<span><a href="http://',$E,'.wuliu.v-get.com/logistics/">网站地图</a>-<a href="#" rel="sidebar">收藏</a></span>';?></div></div><div class="o w"><div class="u"><div class="p il fo"><a href="http://<?php echo $lk,'"><img height="70" width="70" src="http://tp.v-get.com/j/3/co/70/',$E,'.gif" alt="',$H;?>"/></a></div><div class="p ir"><?php echo '<h1>',$H,'</h1><p>',$Qa['he'],'</p>';?></div><div class="o"></div></div><div id="n"><div class="a na"><?php echo '<a href="http://',$E,'.wuliu.v-get.com/" class="no">首页</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/about.html">关于我们</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/services.html">服务项目</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/honor.html">企业荣誉</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/certificate.html">诚信认证</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/exhibition.html">视觉展厅</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/news.html">新闻公告</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/faq.html">常见问题</a><i></i><a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html">联系我们</a><i></i>';?></div></div><div class="o mh"></div><?php echo $ad?'<div class="mg a960x60"><script type="text/javascript">var cpro_id="u1248199"</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script></div>':'';?><div class="v"><div class="q l"><div class="ff l1"><h2><?php echo '<a href="http://',$E,'.wuliu.v-get.com/">',$H,'</a>';?></h2><ul><?php echo '<li>企业名称：',$H,'</li><li>法人代表：<a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html">',$Qa['x'],'</a>　<span q="',$Qa['q'],'"></span></li><li>物流性质：',$Qa['y'],'</li><li>经营范围：',$Z,'</li><li>注册时间：',$Qa['t'],'</li></ul><div class="l1c"><a href="#">企业工商认证</a></div><h6>行业资质：</h6><p>',$Qa['zz'],'</p>';?><div class="fo"><?php echo '<a href="http://',$E,'.wuliu.v-get.com/" rel="sidebar" class="ig">收藏本站</a>';?></div></div><div id="bdshare"></div><div class="l2"><ul><?php echo '<li class="r2t"><a href="http://',$E,'.wuliu.v-get.com/logistics/certificate.html"><span>企业认证</span> &nbsp; Authenticate</a></li><li><a href="http://',$E,'.wuliu.v-get.com/logistics/services.html"><span>公司业务</span> &nbsp; Our Services</a></li><li><a href="http://',$E,'.wuliu.v-get.com/logistics/faq.html"><span>常见问题</span> &nbsp; F.A.Q</a></li><li><a href="#"><span>最新公告</span> &nbsp; BBS &amp; News</a></li>';?></ul></div><?php if($ad){echo '<div class="ff mg l3"><h4>',$LT,'</h4><ul>';require('../ct/'.$B.'.htm');echo '</ul></div><div class="a200x200"><script type="text/javascript">var cpro_id="u1189528";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script></div>';}?><div class="ff l3"><h4>联系我们</h4><ul><?php echo '<li>公　司：',$H,'</li>',$Qa['r'],'<li>联系我：<span q="',$Qa['q'],'"></span></li><li>网　址：<a href="http://',$E,'.wuliu.v-get.com/">',$E,'.wuliu.v-get.com</a></li>';?></ul></div></div><div class="p r"><div class="mc al"><div id="mc"><ul><li><img src="http://tp.v-get.com/j/3/co/960x350/1.jpg" alt="E维科技，卓越的网站开发能力_V-Get!"/></li><li><img src="http://tp.v-get.com/j/3/co/960x350/3.jpg" alt="E维科技，互联网营销专家_V-Get!"/></li><li><img src="http://tp.v-get.com/j/3/co/960x350/4.jpg" alt="E维科技，专注于互联网营销_V-Get!"/></li><li><img src="http://tp.v-get.com/j/3/co/960x350/2.jpg" alt="E维科技，营销不是你想的那么简单_V-Get!"/></li><li><img src="http://tp.v-get.com/j/3/co/960x350/5.jpg" alt="E维科技，不一样的优化推广_V-Get!"/></li></ul><div id="mco" class="a"><a class="mco">1</a><a>2</a><a>3</a><a>4</a><a>5</a></div></div></div><div class="r2"><div class="p ff"><?php echo '<div><a href="http://',$E,'.wuliu.v-get.com/logistics/services.html"><img src="http://tp.v-get.com/j/3/co/l2l.jpg" width="225" height="100" alt="',$H,'服务指南"/></a></div><h2><a href="http://',$E,'.wuliu.v-get.com/logistics/services.html">我们的服务 &gt;&gt;</a></h2><p>',$Qa['m'],'...</p></div><div class="p ff r2c"><div><a href="http://',$E,'.wuliu.v-get.com/logistics/honor.html"><img src="http://tp.v-get.com/j/3/co/l2c.jpg" width="225" height="100" alt="',$H,'荣誉认证"/></a></div><h2><a href="http://',$E,'.wuliu.v-get.com/logistics/honor.html">企业的荣誉 &gt;&gt;</a></h2><p>',$Qa['g'],'...</p></div><div class="q ff"><div><a href="http://',$E,'.wuliu.v-get.com/logistics/about.html"><img src="http://tp.v-get.com/j/3/co/l2r.jpg" width="225" height="100" alt="',$H,'的承诺"/></a></div><h2><a href="http://',$E,'.wuliu.v-get.com/logistics/about.html">我们的承诺 &gt;&gt;</a></h2><p>',$Qa['l'],'...</p></div>';?></div><div class="o mh mb"></div><div class="r3 ff"><div class="r3l p"><div class="r3a a"><a href="http://<?php echo $E;?>.wuliu.v-get.com/logistics/contact.html" title="联系我们"></a><a href="#" title="在线留言"></a><div class="o"></div></div><div class="r3b"><h4>公司简介</h4><p><?php echo $Qa['a'];?>...</p></div></div><div class="r3r p"><h4>新闻公告</h4><ul><?php $RTD='';$RTT='';$Qqn=mysql_query('SELECT tid,subject,lastpost FROM dz_forum_thread WHERE fid=37 AND author="'.$E.'" ORDER BY lastpost DESC LIMIT 5');while($Qan=mysql_fetch_array($Qqn)){$nT=$Qan['lastpost'];$nT=date('Y-m-d',$nT);echo '<li><a href="http://',$E,'.wuliu.v-get.com/logistics/news.html?view=',$Qan['tid'],'">',$Qan['subject'],'</a><i class="pr">',$nT,'</i></li>';}?></ul></div><div class="o"></div></div><div class="o mh"></div><div class="c_b"><h4><a href="http://<?php echo $E;?>.wuliu.v-get.com/logistics/services.html">服务项目</a></h4><?php echo '<div class="a ca">';$Qqi=mysql_query('SELECT p,h,d FROM coi WHERE e="'.$E.'" AND x=1 LIMIT 6');while($Qai=mysql_fetch_array($Qqi)){$iP=$Qai['p'];$iH=$Qai['h'];echo '<a href="http://',$E,'.wuliu.v-get.com/logistics/exhibition.html?i=1&show=',$iP,'"><img src="http://tp.v-get.com/j/3/co/205x110/',$E,'_',$iP,'.jpg" width="205" height="110" alt="',$iH,'"/><br>',$iH,'<br>',$Qai['d'],'</a>';}echo '</div><div class="o mh"></div><h4><a href="http://',$E,'.wuliu.v-get.com/logistics/exhibition.html">视觉展厅</a></h4><div class="a ca">';$Qqi=mysql_query('SELECT p,h,d FROM coi WHERE e="'.$E.'" AND x=0 LIMIT 6');while($Qai=mysql_fetch_array($Qqi)){$iP=$Qai['p'];$iH=$Qai['h'];echo '<a href="http://',$E,'.wuliu.v-get.com/logistics/exhibition.html?i=0&show=',$iP,'"><img src="http://tp.v-get.com/j/3/co/205x110/',$E,$iP,'.jpg" width="205" height="110" alt="',$iH,'"/><br>',$iH,'<br>',$Qai['d'],'</a>';}echo '</div><div class="o"></div>';?></div></div><div class="o mh mg"></div><div class="vb"><div class="vbt po f"><?php echo '<a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html" class="vba">友情链接</a><a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html" class="pr mr">申请换链 &#8482;</a></div><div class="vbc">',($ad?('<a href="http://wuliu.v-get.com/">商务物流网</a>'.$LT):$Qa['lk']);?></div></div></div><script type="text/javascript">var cpro_id="u1346844"</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script><div class="b"><p class="bn"><?php echo '<a href="http://',$E,'.wuliu.v-get.com/logistics/about.html">关于我们</a>|<a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html">联系我们</a>|<a href="#">人才招聘</a>|<a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html">合作加盟</a>|<a href="http://wuliu.v-get.com/">广告服务</a>|<a href="#">合作伙伴</a>|<a href="#">微公益</a>|<a href="http://',$E,'.wuliu.v-get.com/logistics/contact.html">投诉建议</a>|<a href="http://',$E,'.wuliu.v-get.com/logistics/">网站地图</a>|<a href="#">法律声明</a>';?></p><p><a href="http://wuliu.v-get.com/">商务物流网</a> 授权企业站</p><p>Copyright &copy; 2012-2013<a href="http://www.v-get.com/">V-Get.com</a>All Right Reserved.</p><div class="ba a"><a href="http://s.v-get.com/l?l=www.saic.gov.cn/"></a><a href="http://s.v-get.com/l?l=www.cnnic.cn"></a><a href="http://s.v-get.com/l?l=www.cyberpolice.cn"></a><a href="http://s.v-get.com/l?l=www.szfw.org"></a></div></div></div><div class="pn"><script type="text/javascript">J("http://tu.v-get.com/3/co/i.js");<?php echo $Qa['tj'];?></script></div><script type="text/javascript">var cpro_id="u1344600"</script><script src="http://cpro.baidustatic.com/cpro/ui/f.js" type="text/javascript"></script></body></html>
<?php
$Qc=mysql_connect("localhost","wla1Ako","vgt1295EN");mysql_select_db("v3",$Qc);mysql_query("set names utf8");
$lk=$_GET['l'];$LK=explode('.',$lk);$M=$LK[0];
$Qq=mysql_query('SELECT fi.h AS ih,fi.p AS ip,fi.x AS ix,ff.h,ff.k,ff.d,ff.a,ff.e,ff.g,ff.r,ff.q,ff.lw,ff.x,ff.y,ff.z,ff.t FROM ff LEFT JOIN fi ON ff.m=fi.m WHERE ff.m="'.$M.'"');$Qr=mysql_num_rows($Qq);if($Qr==0){header('Location: http://wuliu.v-get.com/');exit();}
$Qa=mysql_fetch_array($Qq);
$H=$Qa['h'];$K=$Qa['k'];$Z=$Qa['z'];$LW=strlen($Qa['lw'])>0?$Qa['lw']:($M.'.wuliu.v-get.com');
echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>网站地图_',$H,'_',$Z,$K,'_商务物流网_V-Get!</title><meta name="keywords" content="',$K,'" /><meta name="description" content="',$H,'承接',$Z,'服务。',$Qa['d'],'"/>';?>
<link href="http://www.v-get.com/www.v-getimg.com/i0/i.ico" type="image/ico" rel="shortcut icon" />
<link href="http://www.v-get.com/www.v-getimg.com/i0/i.css" type="text/css" rel="stylesheet" />
<link href="http://www.v-get.com/www.v-getimg.com/i0/s3/f/i.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="http://www.v-get.com/www.v-getimg.com/i0/i.js"></script>
</head>
<body>

<div class="ww">

<div class="w">
<div class="u po">
<div class="p il fo"><a href="#"><img height="70" width="70" <?php echo 'src="http://www.v-get.com/www.v-getimg.com/i1/s3/70/',$M,'.gif" alt="',$H,'"';?>/></a></div>
<div class="p ir"><?php echo '<h1>',$H,'</h1><p>China ',ucfirst($M),' Logistics Operations & Services Co., Ltd.</p>';?></div>
<div class="fo pr"><a href="http://wuliu.v-get.com/">商务物流</a><?php echo '<a href="http://',$M,'.wuliu.v-get.com/" onclick="sf(\'http://',$M,'.wuliu.v-get.com/\',\'',$H,'\');return false" rel="sidebar" title="',$H,'" class="uprac">加入收藏</a><a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html" class="uprar">联系我们</a>';?></div>
<div class="o"></div>
</div>
<div id="n" class="a"><?php echo '<a href="http://',$M,'.wuliu.v-get.com/">首页</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/about.html">公司介绍</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/services.html">服务项目</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/honor.html">企业荣誉</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/certificate.html">诚信认证</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/exhibition.html">视觉展厅</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/news.html">新闻公告</a><i></i><a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">联系我们</a>';?><i></i></div><div class="o mh"></div><div class="v"><div class="p l"><div class="o mh"></div>
<div class="m cc"><div>您现在的位置：<?php echo '<a href="http://',$M,'.wuliu.v-get.com/">',$H,'</a>';?> &gt; 网站地图</div></div>
<div class="mf">
<?php
echo '<h3><a href="http://',$M,'.wuliu.v-get.com/logistics/about.html">关于我们</a></h3><p>',$Qa['a'],'</p><h3><a href="http://',$M,'.wuliu.v-get.com/logistics/services.html">我们的服务</a></h3><p>',$Qa['e'],'</p><h3><a href="http://',$M,'.wuliu.v-get.com/logistics/honor.html">我们的荣誉</a></h3><p>',$Qa['g'],'</p><h3><a href="http://',$M,'.wuliu.v-get.com/logistics/exhibition.html">企业展厅</a></h3><div class="a h3a">';
while($Qa=mysql_fetch_array($Qq)){echo '<a href="http://',$M,'.wuliu.v-get.com/logistics/exhibition.html?i=',$Qa['ix'],'&show=',$Qa['ip'],'">',$Qa['ih'],'（图）</a>';}
echo '</div><div class="o"></div><h3><a href="http://',$M,'.wuliu.v-get.com/logistics/news.html">新闻公告</a></h3><p>及时发布公司新闻、物流招聘信息、物流价格、与运营状况交流的公告系统，方便广大客户快速了解<?php echo $H;?>发展动态。</p><h3><a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">联系我们</a></h3><p>全面的、详细的公司联系方式和地图标记，让您直观的查询到',$H,'的联络方式和地理位置。</p><h3><a href="http://',$M,'.wuliu.v-get.com/logistics/faq.html">常见问题</a></h3><p>挑选最常用的物流问答案例，让客户更快捷的了解公司的服务状况。常见问题仅作为商务物流网参考，具体详细问题请通过“<a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">联系我们</a>”与',$H,'沟通询问，获得最新、最可靠的回答。</p>';
?>
</div>

</div>

<div class="q r">
<div class="r1"><h2><?php echo $H;?></h2>
<div class="rt po mg"><a href="#"><img src="http://www.v-get.com/www.v-getimg.com/i0/s3/f/rta.gif" width="100" height="22" alt="在线咨询<?php echo $H;?>"/></a></div>
<ul>
<?php 
echo '<li>企业名称：',$H,'</li><li>法人代表：<a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">',$Qa['x'],'</a> 　<span q="',$Qa['q'],'"></span></li><li>物流性质：',$Qa['y'],'</li><li>经营范围：',$Z,'</li><li>注册时间：',$Qa['t'],'</li>';
?>
</ul>
<ul>
<li><a href="http://<?php echo $M;?>.wuliu.v-get.com/logistics/certificate.html" class="ig">企业<i class="iv">Ｖ</i>认证</a></li>
<li>会员等级：暂时无等级</li>
<li>信誉指数：暂时无记录</li>
<li>用户投诉：0 起</li>
<li>满意程度：100%</li>
</ul>
<div class="fo"><?php echo '<a href="http://',$M,'.wuliu.v-get.com/" onclick="sf(\'http://',$M,'.wuliu.v-get.com/\',\'',$H,'\');return false" rel="sidebar" title="',$H,'" class="ig">收藏本站</a>';?></div>
</div>
<div class="mh"></div><div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"><span class="bds_more">分享到：</span><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><a class="bds_mshare"></a><a class="shareCount"></a></div><script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=609302" ></script><script type="text/javascript" id="bdshell_js"></script><script type="text/javascript">$("bdshell_js").src ="http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion="+Math.ceil(new Date()/3600000)</script><div class="o mh"></div>
<div class="r2 mg">
<ul>
<?php echo '<li class="r2t"><a href="http://',$M,'.wuliu.v-get.com/logistics/certificate.html"><span>企业认证</span> &nbsp;V-Get! Authenticate</a></li><li><a href="http://',$M,'.wuliu.v-get.com/logistics/services.html"><span>公司业务</span> &nbsp;Our Services</a></li><li><a href="http://',$M,'.wuliu.v-get.com/logistics/faq.html"><span>常见问题</span> &nbsp;Frequently Questions</a></li><li><a href="#"><span>最新公告</span> &nbsp;Bulletin Board System</a></li>';?>
</ul>
</div>

<div class="f rb">
<h4>联系我们</h4>
<ul>
<?php echo '<li>公　司：',$H,'</li>',$Qa['r'],'<li>即时通：<span q="',$Qa['q'],'"></span></li><li>网　址：<a href="http://',$LW,'">',$LW,'</a></li>';?>
</ul>

</div>

</div><div class="o mh"></div>
</div>
<div class="b">
<p class="bn"><?php echo '<a href="http://',$M,'.wuliu.v-get.com/logistics/about.html">关于我们</a>|<a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">联系我们</a>|<a href="#">人才招聘</a>|<a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">合作加盟</a>|<a href="http://wuliu.v-get.com/">广告服务</a>|<a href="#">合作伙伴</a>|<a href="#">微公益</a>|<a href="http://',$M,'.wuliu.v-get.com/logistics/contact.html">投诉建议</a>|<a href="http://',$M,'.wuliu.v-get.com/logistics/">网站地图</a>|<a href="#">法律声明</a>';?></p><p><a href="http://wuliu.v-get.com/">商务物流网</a> 授权企业站</p><p>Copyright &copy; 2012-2013<a href="http://www.v-get.com/">V-Get.com</a>All Right Reserved.</p><div class="ba a"><a href="http://s.v-get.com/l?l=www.saic.gov.cn/"></a><a href="http://s.v-get.com/l?l=www.cnnic.cn"></a><a href="http://s.v-get.com/l?l=www.cyberpolice.cn"></a><a href="http://s.v-get.com/l?l=www.szfw.org"></a></div></div>
</div>
</div>
<div class="pn"><script type="text/javascript">J("http://www.v-get.com/www.v-getimg.com/i0/s3/f/i.js");var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Feb8ef18175820a1277de885ecc85aaea' type='text/javascript'%3E%3C/script%3E"));</script></div>
</body>
</html>
<?php $Qc=mysql_connect('localhost','GSco9cm30x1','Bt49cE3ox02K');mysql_select_db('vwuliu',$Qc);mysql_query('set names utf8');$lk=$_GET['l'];$LK=explode('.',$lk);$E=$LK[0];$Qq=mysql_query('SELECT b,h,he,k,l,b,r,q,lt,x,y,z,zz,t,adt,tj FROM co WHERE e="'.$E.'" LIMIT 1');$Qr=mysql_num_rows($Qq);if($Qr==0){header('Location: http://wuliu.v-get.com/');exit();}$Qa=mysql_fetch_array($Qq);$B=$Qa['b'];$H=$Qa['h'];$K=$Qa['k'];$Z=$Qa['z'];$LT=$Qa['lt'];$TA=$Qa['adt'];$now=time();$ad=($TA>$now)?false:true;echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>诚信认证_',$H,'_',$Z,$K,'_商务物流网_V-Get!</title><meta name="keywords" content="',$K,'" /><meta name="description" content="',$H,'诚信认证，专业提供',$Z,$Qa['l'],'"/>';?><link href="http://localhost/www.v-get.com/tu/i.css" type="text/css" rel="stylesheet" /><link href="http://localhost/www.v-get.com/tu/3/co/i.css" type="text/css" rel="stylesheet"/><script type="text/javascript" src="http://localhost/www.v-get.com/tu/i.js"></script></head><body><div id="t"><div class="po"><a href="http://localhost/wuliu.v-get.com/">商务物流网</a>-<?php echo $LT,'<span><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/">网站地图</a>-<a href="#" rel="sidebar">收藏</a></span>';?></div></div><div class="o w"><div class="u"><div class="p il fo"><a href="http://<?php echo $lk,'"><img height="70" width="70" src="http://localhost/tp.v-get.com/j/3/co/70/',$E,'.gif" alt="',$H;?>"/></a></div><div class="p ir"><?php echo '<h1>',$H,'</h1><p>',$Qa['he'],'</p>';?></div><div class="o"></div></div><div id="n"><div class="a na"><?php echo '<a href="http://localhost/',$E,'.wuliu.v-get.com/">首页</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/about.html">关于我们</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/services.html">服务项目</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/honor.html">企业荣誉</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/certificate.html" class="no">诚信认证</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/exhibition.html">视觉展厅</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/news.html">新闻公告</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/faq.html">常见问题</a><i></i><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/contact.html">联系我们</a><i></i>';?></div></div><div class="o mh"></div><?php echo $ad?'<div class="mg a960x60"><script type="text/javascript">var cpro_id="u1319845";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script></div>':'';?><div class="v"><div class="p l"><div class="ff l1"><h2><?php echo '<a href="http://localhost/',$E,'.wuliu.v-get.com/">',$H,'</a>';?></h2><ul><?php echo '<li>企业名称：',$H,'</li><li>法人代表：<a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/contact.html">',$Qa['x'],'</a>　<span q="',$Qa['q'],'"></span></li><li>物流性质：',$Qa['y'],'</li><li>经营范围：',$Z,'</li><li>注册时间：',$Qa['t'],'</li></ul><div class="l1c"><a href="#">企业工商认证</a></div><h6>行业资质：</h6><p>',$Qa['zz'],'</p>';?><div class="fo"><?php echo '<a href="http://localhost/',$E,'.wuliu.v-get.com/" rel="sidebar" class="ig">收藏本站</a>';?></div></div><div id="bdshare"></div><div class="l2"><ul><?php echo '<li class="r2t"><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/certificate.html"><span>企业认证</span> &nbsp; Authenticate</a></li><li><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/services.html"><span>公司业务</span> &nbsp; Our Services</a></li><li><a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/faq.html"><span>常见问题</span> &nbsp; F.A.Q</a></li><li><a href="#"><span>最新公告</span> &nbsp; BBS &amp; News</a></li>';?></ul></div><?php if($ad){echo '<div class="ff mg l3"><h4>',$LT,'</h4><ul>';require('../ct/'.$B.'.htm');echo '</ul></div><div class="a200x200"><script type="text/javascript">var cpro_id="u1189528";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script></div>';}?><div class="ff l3"><h4>联系我们</h4><ul><?php echo '<li>公　司：',$H,'</li>',$Qa['r'],'<li>联系我：<span q="',$Qa['q'],'"></span></li><li>网　址：<a href="http://localhost/',$E,'.wuliu.v-get.com/">',$E,'.wuliu.v-get.com</a></li>';?></ul></div></div><div class="q r"><div class="o mh"></div><div class="m cc"><div>您现在的位置：<?php echo '<a href="http://',$E,'.wuliu.v-get.com/">',$H,'</a>';?> &gt; 诚信认证</div></div><div class="mf"><div class="c_ca mg"><h5><a href="#">企业<i class="iv">V</i>认证</a>（2013年02月22日通过认证）</h5><p>通过第三方公益性认证机构，对企业合法性，真实性的核实及申请人是否隶属该企业且经过企业授权的查证。</p><?php $Qqc=mysql_query('SELECT * FROM coc WHERE e="'.$E.'" LIMIT 1');while($Qac=mysql_fetch_array($Qqc)){$cH=$Qac['h'];$cB=$Qac['b'];$cA=$Qac['a'];$cA*=25;$cAa=$cA-24;$cC=$Qac['c'];$cC*=15;$cCa=$cC-14;echo '<p>企业名称：',$cH,' <span class="f0">[已认证]</span></p><p>注册资金：人民币  ',$Qac['m'],' 万元 <span class="f0">[已认证]</span></p><p>工商登记号：',$Qac['j'],' <span class="f0">[已认证]</span></p><p>法人代表：</td><td>',$Qa['x'],' <span class="f0">[已认证]</span></p><p>注册日期：</td><td>',$Qa['t'],' <span class="f0">[已认证]</span></p><p>注册地址：</td><td>',$Qac['l'],' <span class="f0">[已认证]</span></p><p>物流公司类型：</td><td>',$Qac['w'],' <span class="f0">[已认证]</span></p><p>员工人数：</td><td>',$cAa,' - ',$cA,' 人 <span class="f0">[已认证]</span></p><p>配送车辆：</td><td>',$cCa,' - ',$cC,' 辆 <span class="f0">[已认证]</span></p><p>执照期限：</td><td>',$Qac['t'],' <span class="f0">[已认证]</span></p><p>发证机关：</td><td>',$Qac['u'],' <span class="f0">[已认证]</span></p><p>以上信息来源于工商执照信息，最终解释权归公司和工商总局所有。</p>';}?></div></div></div><div class="o mh"></div></div>AD960x90pic<div class="b"><p class="bn"><?php echo '<a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/about.html">关于我们</a>|<a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/contact.html">联系我们</a>|<a href="#">人才招聘</a>|<a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/contact.html">合作加盟</a>|<a href="http://wuliu.v-get.com/">广告服务</a>|<a href="#">合作伙伴</a>|<a href="#">微公益</a>|<a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/contact.html">投诉建议</a>|<a href="http://localhost/',$E,'.wuliu.v-get.com/logistics/">网站地图</a>|<a href="#">法律声明</a>';?></p><p><a href="http://localhost/wuliu.v-get.com/">商务物流网</a> 授权企业站</p><p>Copyright &copy; 2012-2013<a href="http://www.v-get.com/">V-Get.com</a>All Right Reserved.</p><div class="ba a"><a href="http://s.v-get.com/l?l=www.saic.gov.cn/"></a><a href="http://s.v-get.com/l?l=www.cnnic.cn"></a><a href="http://s.v-get.com/l?l=www.cyberpolice.cn"></a><a href="http://s.v-get.com/l?l=www.szfw.org"></a></div></div></div><div class="pn"><script type="text/javascript">J("http://localhost/www.v-get.com/tu/3/co/i.js");<?php echo $Qa['tj'];?></script></div><script type="text/javascript">var cpro_id="u1344600"</script><script src="http://cpro.baidustatic.com/cpro/ui/f.js" type="text/javascript"></script></body></html>
<?php
$ad=array('200x200'=>array(0=>'http://www.v-get.com/',1=>'http://www.v-get.com/',2=>'http://www.v-get.com/'),
'250x250'=>array(0=>'http://www.v-get.com/',1=>'http://www.v-get.com/',2=>'http://www.v-get.com/'),
'270x60'=>array('<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x60/8_host_cloud.gif" width="270" height="60" alt="Web安全云，全面提升网站应用安全性。E维科技，不加价！"/></a>','<a href="http://e.v-get.com/sem/"><img src="http://tp.v-get.com/j/270x60/8_seo.gif" width="270" height="60" alt="SEO原创文章代写"/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x60/8_gongyi.jpg" width="270" height="60" alt="公益是E维科技开启的一扇窗，让世界充满爱"/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x60/8_sem_1.gif" width="270" height="60" alt="专注本土企业品牌营销策划"/></a>','<a href="http://e.v-get.com/seo/"><img src="http://tp.v-get.com/j/270x60/8_sem_2.gif" width="270" height="60" alt="网站SEO全面监控，24小时不间断"/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x60/8_hosts.gif" width="270" height="60" alt="E维科技服务器遍布全国"/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x60/8_sem_baidu.gif" width="270" height="60" alt="超过80%的中国市场份额，投入几千元轻松做推广"/></a>'),
'270x106'=>array('<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x106/8_tech_0.jpg" width="270" height="106" alt="中国智能手机应用大赛"/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/270x106/8_tech_sem.jpg" width="270" height="106" alt="网络营销就是这么简单！"/></a>'),
'728x90'=>array('<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/728x90/0.gif" width="728" height="90" alt=""/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/728x90/1.gif" width="728" height="90" alt=""/></a>'),
'960x60'=>array('<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/960x60/0.gif" width="960" height="60" alt=""/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/960x60/1.gif" width="960" height="60" alt=""/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/960x60/2.gif" width="960" height="60" alt=""/></a>','<a href="http://e.v-get.com/host/"><img src="http://tp.v-get.com/j/960x60/3.gif" width="960" height="60" alt=""/></a>'));
$A=$_GET['a'];
$aa=$ad[$A];
$ad=array_rand($aa,1);
$AD=$aa[$ad];
echo 'var AD=\'',$AD,'\';';
?>
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"><xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/><xsl:template match="/">
<!-- 这里不能用 <base target="_blank">，否则无法显示 -->
		<html xmlns="http://www.w3.org/1999/xhtml"><head><title>V-Get.com</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">body{font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,Verdana;font-size:13px;}th{text-align:left;padding-right:30px;font-size:11px;}td{font-size:11px;}tr.high {background-color:whitesmoke}a{color:#000}</style>
			</head>
			<body>
				<h1><a href="http://www.v-get.com/" target="_blank">V-Get.com</a></h1>
				<div id="c">
					<table cellpadding="5">
						<tr style="border-bottom:1px black solid;"><th>URL</th><th>Priority</th><th>Change Frequency</th><th>LastChange+08:00</th></tr>
						<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/><xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
						<xsl:for-each select="sitemap:urlset/sitemap:url">
							<tr>
								<xsl:if test="position() mod 2 != 1"><xsl:attribute name="class">high</xsl:attribute></xsl:if>
								<td><xsl:variable name="itemURL"><xsl:value-of select="sitemap:loc"/></xsl:variable>
									<a href="{$itemURL}" target="_blank"><xsl:value-of select="sitemap:loc"/></a></td>
								<td><xsl:value-of select="concat(sitemap:priority*100,'%')"/></td>
								<td>
									<xsl:value-of select="concat(translate(substring(sitemap:changefreq, 1, 1),concat($lower, $upper),concat($upper, $lower)),substring(sitemap:changefreq, 2))"/>
								</td>
								<td>
									<xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/>
								</td>
							</tr>
						</xsl:for-each>
					</table>
				</div>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
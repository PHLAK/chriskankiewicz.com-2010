<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="http://www.chriskankiewicz.com/sitemap.xsl"?>
<xsl:stylesheet version="2.0"
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<title>XML Sitemap | Chris Kankiewicz</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<style type="text/css">
					body {
					  background-image: url('http://www.chriskankiewicz.com/images/ck-bg.gif');
						font-family: "Lucida Grande","Lucida Sans Unicode",Tahoma,Verdana;
						font-size: 13px;
					}

					h1 {
					  margin: 5px auto;
					  width: 760px;
				  }

					table {
					  background-color: #FFF;
					  border: 1px solid #999;
					  margin: 0 auto;
					  width: 760px;
				  }

					td {
						font-size: 1em;
					}

					th {
						text-align: left;
						padding-right: 30px;
						font-size: 1em;
					}

					tr {
						background-color: #EEE;
					}

					tr.high {
						background-color: #DDD;
					}

					a {
						color: black;
					}
				</style>
			</head>
			<body>
				<h1>ChrisKankiewicz.com Sitemap</h1>
				<div id="content">
					<table cellpadding="5">
						<tr style="border-bottom:1px black solid;background-color:#FFF;">
							<th>URL</th>
							<th>Priority</th>
							<th>Change Frequency</th>
						</tr>
						<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
						<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
						<xsl:for-each select="sitemap:urlset/sitemap:url">
							<tr>
								<xsl:if test="position() mod 2 != 1">
									<xsl:attribute  name="class">high</xsl:attribute>
								</xsl:if>
								<td>
									<xsl:variable name="itemURL">
										<xsl:value-of select="sitemap:loc"/>
									</xsl:variable>
									<a href="{$itemURL}">
										<xsl:value-of select="sitemap:loc"/>
									</a>
								</td>
								<td>
									<xsl:value-of select="concat(sitemap:priority*100,'%')"/>
								</td>
								<td>
									<xsl:value-of select="concat(translate(substring(sitemap:changefreq, 1, 1),concat($lower, $upper),concat($upper, $lower)),substring(sitemap:changefreq, 2))"/>
								</td>
							</tr>
						</xsl:for-each>
					</table>
				</div>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
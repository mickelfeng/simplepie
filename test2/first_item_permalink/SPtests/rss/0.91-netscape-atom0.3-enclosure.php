<?php

$data = <<<EOD
<!DOCTYPE rss SYSTEM "http://my.netscape.com/publish/formats/rss-0.91.dtd">
<rss version="0.91" xmlns:a="http://purl.org/atom/ns#">
	<channel>
		<item>
			<a:link href="http://example.com/" rel="enclosure"/>
		</item>
	</channel>
</rss>
EOD;

$expected = 'http://example.com/';

?>
<?php

$data = <<<EOD
<rss version="2.0" xmlns:geo="http://www.w3.org/2003/01/geo/wgs84_pos#">
	<channel>
		<item>
			<geo:lat>55.701</geo:lat>
			<geo:long>12.552</geo:long>
		</item>
	</channel>
</rss>
EOD;

$expected = 12.552;

?>
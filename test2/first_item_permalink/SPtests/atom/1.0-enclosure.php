<?php

$data = <<<EOD
<feed xmlns="http://www.w3.org/2005/Atom">
	<entry>
		<link href="http://example.com/" rel="enclosure"/>
	</entry>
</feed>
EOD;

$expected = 'http://example.com/';

?>
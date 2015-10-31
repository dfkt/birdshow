<?php
	$files = preg_split('/\n/', `find . -iwholename './*/*.jpg'`, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
	shuffle($files);
	echo($files[0]);
?>

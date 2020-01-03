<?php

$debugOutput=0;
$typeformUrl = 'https://cupprint.typeform.com/to/ftSFZb';
	
$filename=dirname(__FILE__) . '/development.txt';
if (file_exists($filename)){
	$debugOutput=1;
	$typeformUrl = 'https://cupprint.typeform.com/to/yoKheS';
}

?>

<html>
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Cup Quarantine<?php echo ( $debugOutput==1 ? '-= Development =-' : '' )?></title>
<style type="text/css">
html {
	margin: 0;
	height: 100%;
	overflow: hidden;
}

iframe {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	border: 0;
}
</style>
</head>
<body>
	<iframe id="typeform-full" width="100%" height="100%" frameborder="0"
		src="<?php echo $typeformUrl; ?>"></iframe>
	<script type="text/javascript"
		src="https://embed.typeform.com/embed.js"></script>
</body>
</html>
<!doctype html>
<html>
<head>
	<title>Wikifang - 500 Server Error</title>
	<style>
	body {background-color:black;color:white;text-align:center;}
	h1 {color:yellow;text-shadow: blue 0px 0px 5px, blue -1px 0px 0px, blue 0px -1px 0px, blue 1px 0px 0px, blue 0px 1px 0px; font-weight:normal;font-family:Impact; letter-spacing:3px;font-size:40pt; font-variant: small-caps;}
	a {color:yellow;}
	</style>
</head>
<body>
	<h1>Server Error</h1>
	<img src="/etc/sad_crypto.png">
	<p>Something went wrong on the server!  :(</p>
	<p>This is probably not your fault.  Try refreshing!  Tell us if it keeps on happening.</p>
<hr>

<?
echo "URL: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]<br>\n";
$fixer = "checksuexec ".escapeshellarg($_SERVER[DOCUMENT_ROOT].$_SERVER[REQUEST_URI]);
echo `$fixer`;
?>

</body></html>

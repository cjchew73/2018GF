<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php


$date = new DateTime(null, new DateTimeZone('Asia/Singapore'));
echo date('d/M/Y H:i:s', ($date->getTimestamp() + $date->getOffset()));
echo "<br>";
echo date('d/M/Y H:i:s', ($date->getTimestamp() + $date->getOffset()));


?>

</body>
</html>
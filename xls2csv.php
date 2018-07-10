

<!DOCTYPE html>
<html>
<head>
	<title>Convert Excel file into CSV for db loading</title>
</head>
<body>

<?php


$date = new DateTime(null, new DateTimeZone('Asia/Singapore'));
echo date('d/M/Y H:i:s', ($date->getTimestamp() + $date->getOffset()));
echo "<br>";


	#require_once 'Classes/PHPExcel/IOFactory.php';
	require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

	ini_set('memory_limit', '1024M');
	ini_set("max_execution_time", "300");

	$inputFileType = 'Excel2007';
	$inputFileName = 'test.xlsx';

	$objReader = PHPExcel_IOFactory::createReader($inputFileType);

	$objPHPExcelReader = $objReader->load($inputFileName);$loadedSheetNames = $objPHPExcelReader->getSheetNames();

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'CSV');

	foreach($loadedSheetNames as $sheetIndex => $loadedSheetName) 
	{    
		$objWriter->setSheetIndex($sheetIndex);
		$objWriter->save($loadedSheetName.'.csv');
	}

$date = new DateTime(null, new DateTimeZone('Asia/Singapore'));
echo date('d/M/Y H:i:s', ($date->getTimestamp() + $date->getOffset()));
echo "<br>";


?>

</body>
</html>
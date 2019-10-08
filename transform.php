<?php


if (isset($argc)) {
	for ($i = 0; $i < $argc; $i++) {
		//echo "Argument #" . $i . " - " . $argv[$i] . "\n";
		
		$xml = new DOMDocument();
		$xml->load($argv[2]);
 
		$xsl = new DOMDocument;
		$xsl->load($argv[1]);
 
		$proc = new XSLTProcessor();
		$proc->registerPHPFunctions();
		$proc->importStyleSheet($xsl);
 
		echo $proc->transformToXML($xml);
		
	}
}
else {
	echo "argc and argv disabled\n";
}
 


?>

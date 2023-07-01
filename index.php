<?php

require_once 'ParserInterface.php';
require_once 'XmlParser.php';
require_once 'CsvParser.php';
require_once 'FileHandler.php';
require_once 'PriceFileHandler.php';


// Usage example:
$parser = new XmlParser(); // or $parser = new CsvParser();
$fileHandler = new PriceFileHandler($parser);

$data = "Sample file data"; // Replace with your actual file data

$parsedData = $fileHandler->parse($data);


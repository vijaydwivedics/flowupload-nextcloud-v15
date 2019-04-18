<?php
// Load upload classes
require_once(__DIR__ . '/Flow/Autoloader.php');
Flow\Autoloader::register();

$relativePath = $_REQUEST['relativePath'];
$rootDir = (isset($_REQUEST['dir']) && $_REQUEST['dir']!='' && $_REQUEST['dir']!='/')?$_REQUEST['dir'].'/':'/';
$result = $rootDir.$relativePath;

// Skip existing files 
// ToDo: Check if file size changed?
if (\OC\Files\Filesystem::file_exists($result)) {
	echo 1; exit;
}
echo 0;
exit;
?>

<?php
// Load upload classes
require_once(__DIR__ . '/Flow/Autoloader.php');
Flow\Autoloader::register();

//get new file name
function check_exist($name,$path_parts,$num,$root)
{
	if (\OC\Files\Filesystem::file_exists($name)){
		$num++;
		$dirname = ($path_parts["dirname"] !='' && $path_parts["dirname"] !='/') ? $path_parts["dirname"].'/' : '/';
		$newfilename = $dirname.$path_parts["filename"]."($num).".$path_parts["extension"];
		check_exist($newfilename,$path_parts,$num,$root);
	}
	else
	{
		$pathparts = pathinfo($name);
		$newpath = explode($root,$name,2);
		$newpath = $newpath[1];
		
		$resp = array('result'=>true,'path'=>$name,'name'=>$pathparts['basename'],'newpath'=>$newpath);
		echo json_encode($resp);
		exit;
	}
}
//
$relativePath = $_REQUEST['relativePath'];
$rootDir = (isset($_REQUEST['dir']) && $_REQUEST['dir']!='' && $_REQUEST['dir']!='/') ? $_REQUEST['dir'].'/' : '/';
$result = $rootDir.$relativePath;
//
$filename = basename($relativePath);
$num = 0;
$path_parts = pathinfo($result);
$t = check_exist($result,$path_parts,$num,$rootDir);
echo $t;
exit;
?>

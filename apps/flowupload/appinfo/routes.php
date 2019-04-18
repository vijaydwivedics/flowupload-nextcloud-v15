<?php

$this->create('flowupload_index', '/')
	->actionInclude('flowupload/index.php');

$this->create('flowupload_ajax_upload', 'ajax/upload.php')
	->actionInclude('flowupload/ajax/upload.php');


$this->create('flowupload_ajax_checkfile', 'ajax/checkfile.php')
	->actionInclude('flowupload/ajax/checkfile.php');
	
$this->create('flowupload_ajax_checkfilename', 'ajax/checkfilename.php')
	->actionInclude('flowupload/ajax/checkfilename.php');
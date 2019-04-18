<?php

\OCP\User::checkLoggedIn();

\OCP\Util::addStyle('flowupload', 'bootstrap-combined');
\OCP\Util::addStyle('flowupload', 'style');

$tpl = new OCP\Template("flowupload", "main", "user");
$tpl->printPage();
<?php
	require('configsettings.php');
	require('Config.php');
	require('DBAccess.php');
	require('Qgen.php');
	$config = new Config(HOSTNAME,USERNAME,PASSWORD,DATABASE);
	$db = new DBAccess($config);
	$qgen = new Qgen($db);
?>
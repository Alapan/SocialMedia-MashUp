<?php 
	require 'fbconfig.php';   // Include fbconfig.php file
	$facebook->destroySession();  // to destroy facebook sesssion
	header("Location: " ."http://group02.naf.cs.hut.fi/index.php");        // you can enter home page here ( Eg : header("Location: " ."http://demo.krizna.com"); 
?>

<?php 
	session_start();
	session_destroy();
	header( 'Location: http://eapple.cfans.umn.edu' );
	exit();
	?>
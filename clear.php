<?php
	session_start();
	unset($_SESSION['cart']);
	$_SESSION['message'] = 'Cart cleared successfully';
	header('location:indeex2.php');
?>
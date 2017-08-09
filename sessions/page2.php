<?php session_start(); ?>
<?php
	unset($_SESSION['myname']);
?>

<?php echo $_SESSION['myname']; ?>

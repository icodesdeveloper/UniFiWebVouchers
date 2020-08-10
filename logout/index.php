<?php
session_start();

if($_SESSION['uuid']) {
	session_destroy();
	header("Location: ../");
} else {
	header("Location: ../");
}

?>
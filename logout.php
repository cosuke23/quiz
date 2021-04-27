<?php
session_start();

if (isset($_SESSION['id'], $_SESSION['pass'])) {
session_destroy();
header("location:index.php");
			}
?>
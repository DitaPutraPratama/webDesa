<?php
session_start();
unset($_SESSION["nama"]);
header("Location: index.php");

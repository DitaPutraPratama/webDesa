<?php
session_start();
unset($_SESSION["nama"]);
header("Location:../login.php");

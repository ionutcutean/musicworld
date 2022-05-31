<?php
require 'mysql.php'; 
session_destroy();
header("Location: index.php");
?>
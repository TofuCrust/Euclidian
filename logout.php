<?php
session_start();
session_destroy();
header("Location: index.php"); // bisa diarahkan ke index.php juga
exit;

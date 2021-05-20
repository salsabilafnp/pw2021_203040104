<?php
// cek session
session_start();
// akhiri session
session_destroy();
// arahkan ke login
header("Location: login.php");
exit;

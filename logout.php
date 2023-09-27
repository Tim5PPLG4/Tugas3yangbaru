<?php 
 // mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// memgalihkan halaman ke halaman login
header("location:index.php");
?>

<?php
// proses logout
session_start();
session_destroy();
echo "<script>alert('Anda Telah Logout, sampai jumpa lagi');
window.location = 'login.php';</script>";
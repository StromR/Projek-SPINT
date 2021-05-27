<?php
session_start();
session_destroy();
echo "<script>alert('Log Out Success'); window.location='index.php'</script>";
header('location:index.php');
?>

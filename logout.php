<?php
session_start();
session_destroy();
include('config.php');
echo ("<script LANGUAGE='JavaScript'>
window.location.href='index.php';
</script>");
?>

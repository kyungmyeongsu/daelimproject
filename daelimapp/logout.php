<?php
session_start();
//세션 삭제
session_destroy();
header('Location:./index.php');
exit();
?>
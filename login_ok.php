<?php
    session_start();
    $_SESSION['user_info'] = $_POST['user_info'];
    $_SESSION['isAutoLogin'] = $_POST['isAutoLogin'];
    echo $_SESSION['isAutoLogin'];
    echo $_SESSION['user_info'];
?>

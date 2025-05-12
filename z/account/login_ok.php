<?
    session_start();
    $_SESSION['my_port'] = "shop";
    $_SESSION['json'] = json_decode($_POST['obj'], true);
?>

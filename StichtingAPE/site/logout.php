<?php
    session_start();
    session_destroy();
    echo "<script>window.open('login/index.php','_self')</script>";
?>

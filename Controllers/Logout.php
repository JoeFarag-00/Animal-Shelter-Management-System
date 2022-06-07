<?php
    session_start();
    session_unset();
    session_destroy();
    Header("location: ../Views/Index.php");
?>
<?php

    session_start();
    session_destroy();
    header("Location:start1.html");

    exit();

?>
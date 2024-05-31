<?php

session_destroy();
$_SESSION["loggedin"] = false;
echo"<script> window.location.href='/' </script>";

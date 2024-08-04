<?php

session_start();
session_unset();
session_destroy();
setcookie("user_id", "", time());
header("Location: /jewelry_management_system/admin/index.php");

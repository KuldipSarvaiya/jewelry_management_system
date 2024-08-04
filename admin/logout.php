<?php

session_start();
session_unset();
session_destroy();
header("Location: /jewelry_management_system/admin/index.php");

<?php

session_start();
session_destroy();
echo "<script>window.location.href='../../pages/account/login.php'</script>";
<?php

setcookie("user","john doe", time() + (86400 * 30), "/"); // 86400 = 1 day
echo "cookie is set";
?>
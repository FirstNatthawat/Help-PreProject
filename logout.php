<?php
session_start();
# ลบตัวแปร session ทั้งหมด
session_destroy();
header("Location: index.php ");

?>
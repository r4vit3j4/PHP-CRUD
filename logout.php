<?php
session_start();
session_destroy();
header('location: http://localhost/projects/Pizza Palace/?logout=yes');
?>
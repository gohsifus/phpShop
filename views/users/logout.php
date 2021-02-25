<?php
session_start();
session_destroy();
header('Location: registrate.php');
exit;
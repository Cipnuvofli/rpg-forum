<?php

session_start();
$action= isset($_GET['action'])? $_GET['action'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";

kf($
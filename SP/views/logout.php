<?php

if ( isset($_SESSION['user']) ) {
    unset($_SESSION['user']);
}

header("Location: " . URL_SITE . '/login.php');
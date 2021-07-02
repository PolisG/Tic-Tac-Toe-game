<?php

/***
* File: logout.php
* Author: Georgiadis Polychronis
* Created: 13.1.2020
* Description: Log out
***/

session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit();

?>
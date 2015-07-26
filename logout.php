<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/27/15
 * Time: 12:09 AM
 */

session_start();
session_destroy();

header('Location: index.php');
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/10/2015
 * Time: 10:13 AM
 */

// Connect database
$db = mysqli_connect('127.0.0.1', 'root', '', 'cleanblog') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

require 'config.php';
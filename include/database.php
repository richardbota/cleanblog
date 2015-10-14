<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/10/2015
 * Time: 10:13 AM
 */

// Connect database
require_once 'config.php';

$db = mysqli_connect(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_DATABASE) or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

require 'config.php';

?>
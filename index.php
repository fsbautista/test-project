<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 12/22/14
 * Time: 9:47 PM
 */

$db_host = "localhost";
$db_username = "root";
$db_password = "q1w2e3r4";
$db_name = "lcxapp";

$link = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($link, $db_name);

$q = "SELECT * ";
$q .= "FROM participants";

$result = mysqli_query($link, $q);

while($row = mysqli_fetch_array($result))
    echo $row["email"]."<br />";
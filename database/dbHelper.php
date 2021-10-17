<?php
require_once('config.php');
function execute($sql)
{
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    // run query insert, update, delete
    mysqli_query($con, $sql);
    // close database
    mysqli_close($con);
}

function executeResult($sql)
{
    $con    = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $result = mysqli_query($con, $sql);
    if ($result) {
        $data   = [];
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }
        // close database
        mysqli_close($con);
        return $data;
    } else {
        return null;
    }
}
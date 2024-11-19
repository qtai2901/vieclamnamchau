<?php
$servername = "localhost";
$username = "vieclam5chau";
$password = "vieclam5chau";
$db = "vieclam5chau";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

function get_list($sql, $conn)
{
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Câu truy vấn bị sai');
    }
    $return = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $return[] = $row;
    }
    mysqli_free_result($result);
    return $return;
}

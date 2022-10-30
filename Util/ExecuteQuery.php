<?php

function executeSelect($sql)
{
    require 'DbConnection.php';

    $result = mysqli_query($conn, $sql);
    if ($result) {
        if ($result->num_rows <= 0) {
            printf('No record found.<br />');
        } else {
            return $result;
        }
        mysqli_free_result($result);
    } else {
        echo "SQL Error! ${sql}";
    }

    mysqli_close($conn);
}

function executeInsertUpdateDelete($sql)
{
    require 'DbConnection.php';

    $result = mysqli_query($conn, $sql);
    if ($result) {
        mysqli_free_result($result);
    } else {
        echo "SQL Error! ${sql}";
    }

    mysqli_close($conn);
}

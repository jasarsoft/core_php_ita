<?php
function scalar($query)
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"test_db");
    $r = mysqli_query($conn,$query);
    if(mysqli_num_rows($r) == 1)
        {
                $value = mysqli_fetch_row($r);
                return (int)$value[0];
        }
    else
        return "";
}
echo scalar("select count(userid) from users");
?>
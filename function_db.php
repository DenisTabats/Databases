<?php
$link = false;

function openDB()   
{
    global $link;

    $link = mysqli_connect("localhost","root","","Practice");
    mysqli_query($link,"SET NAMES UTF8");
}

function closeDB(){
    global $link;
    mysqli_close($link);
}

function getAllContragents(){
    global $link;
    openDB();

    $res = mysqli_query($link,"SELECT * FROM Scores");

    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

?>
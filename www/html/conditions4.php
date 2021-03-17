<?php


$time = date("H:I");
$timezone = date("e");

if ($time < "05:00" && $time < "09:00") {
    echo "Good morning";
} else
if ($time >= "09:01" && $time < "12:00") {
    echo "Good day";
} else
if ($time >= "12:01" && $time < "16:00") {
    echo "Good afternoon";
} else
if ($time >= "16:01" && $time < "21:00") {
    echo "Good evening";
} else
if ($time >= "21:01") {
    echo "Good night";
}


?>
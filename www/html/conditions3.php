<?php


$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
$room_filthiness = $possible_states[4];  

if(in_array($room_filthiness,["health hazard", "filthy"])){
    echo "<br>ho crap, it's dagerous, clean up your room!";
}else if($room_filthiness == "dirty"){
    echo "<br>how bro... serieously, clean up your room!";
}else{
    echo "<br>nice gays, perfect room!";
}


?>

<?php
    if( $temperature >= 15 ) {
        // code to execute if the condition results TRUE
    $clothes = "T-shirt";
    $should_i_wear_a_scarf = false;
    } else {
    // code to execute if the condition results FALSE   
        $clothes = "Pull-over"; $should_i_wear_a_scarf = true;
    }   
        
    if ($should_i_wear_a_scarf == true){

    grab_scarf_from_door_hanger();
    }

    cover_my_chest_with($clothes);
?>
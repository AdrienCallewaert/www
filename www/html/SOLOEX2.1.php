<?php

$prix = 2.5;
$quantité = 10;
$total = $prix * $quantité;
echo 'Cela coute ' .$total. ' euros. ';

//calcul (idem JS)
// Attention, petit piège : si vous voulez insérer un guillemet simple alors que le texte est entouré de guillemets simples, il faut l'échapper comme on l'a vu précédemment, en insérant un antislash devant. Il en va de même pour les guillemets doubles. Voici un exemple pour bien comprendre :
// ex
// $variable = "Mon \"nom\" est Mateo21";
// $variable = 'Je m\'appelle Mateo21';
// decimal avec point pas de virgule


?>



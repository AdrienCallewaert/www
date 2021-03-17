<?php

$age = 114;

if ($age <= 12)
{
    echo "Hello kiddo!";
}

elseif ($age >= 13 && $age < 18)
{
    echo "Hello Teenager!";
}

elseif ($age >= 18 && $age < 115)
{
    echo "Hello Adult!";
}

elseif ($age >= 115)
{
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
else
{
    echo "Sorry, repeat?";
}

?>
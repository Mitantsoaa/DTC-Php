<?php
    $ville = 'Antananarivo';
    $adressePost = 75000;
    $telephone = 342813067;
    $isCapital = true;

    // echo $ville;
    // echo $adressePost;
    // echo $telephone;
    // echo $isCapital;
    $age = 12;
    $taona = 18;
    echo $age <=> $taona;
    if ($ville == 'tamatave' || $adressePost > 0){
        echo 'yeah';
    }
    if ($isCapital && $ville){
        echo 'Eto am tanàna';
    }
    if (!$age){
        echo 'Tsy misy taona';
    }
    if ($age == 12 xor $taona >= 18){
        echo 'Aoeeee';
    }
    ?>
<?php
    $ville = 'Antananarivo';
    $adressePost = 75000;
    $telephone = 342813067;
    $isCapital = true;

    // echo $ville;
    // echo $adressePost;
    // echo $telephone;
    // echo $isCapital;
    $age = 18;
    echo $age.'taona izy <br>';
    if($age <= 18){
        echo "Tsy ampy taona </br>";
    }
    
    if ($age >= 18){
        echo "Efa ampy taona </br>";
    }
    
    if($age != 12){
        echo $age."<br>";
    }

    if($age == 18){
        echo "Vao ampy taona </ br>";
    }
    // table boolean anaty if +github
    // env python

    //parcours tableau avec php
    $tab = array('carotte','poivron','aubergine','chou');
    foreach($tab as $legume){
        echo $legume;
    }

    for($i=0; $i<= count($tab); $i++){
        echo $tab[$i];
    }
    ?>
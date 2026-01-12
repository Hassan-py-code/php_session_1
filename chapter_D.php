







<?php  
         
    $animaux=["chat","Chien","lapin"];
    echo "Premier animal : " . $animaux[0] . "<br>";

    foreach ($animaux as $anim){
        echo "Animal : $anim <br>";
    }
   
    $voiture=[


        "marqup" => "toyota",
        "model" => "corolla",
        "annee" => 2020
    ];

    echo "modele : " . $voiture ["model"] . "<br>";


    $fruits=["apple","orange"];

    array_push($fruits , "mango");

    unset($fruits[1]);


    echo "Number the fruits :" . count($fruits);

?>
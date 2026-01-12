


<?php  
  
   for ($i=0; $i <= 10 ; $i++) { 
     echo "Number : $i <br>";
   }
  
    $j=1;
    while ($j <=5){
        echo "Iteration : $j <br>";
        $j++;
    }

    $animals=["cat","dogs","lion"];

    foreach($animals as $each_animal){
         echo "Animals is : $each_animal <br>";
    }

    for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; 
    if ($i == 8) break;   
    echo "Valeur : $i <br>";
}

?>
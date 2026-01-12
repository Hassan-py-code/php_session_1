





<?php  

    function say_sim(){
          echo "Hello world";
    }

    say_sim();

   
    function calculate($a , $b){
         return $a + $b;
         
    }

    echo "Somme : " . calculate(12 , 20);


    function welcomme($name="Mohammed"){
         echo "Hello Mr " . $name;
    }

    welcomme();

    $computer=0;

    function incremment(){
         static $computer =0;
         $computer++;
         echo $computer;
    }

     incremment();
      incremment();




?>





<?php  


  $age=20;

  if($age >= 22){
      echo "You join with us";
  }else{
     echo "You age is not ";
  }
 

  $not =12;
  if($not >= 16){
    echo "Good";
  }elseif ($not >=10){
      echo "medium";
  }else{
     echo "Try again";
  }


  $days = "Vendredi";
  
switch ($days) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Dernier jour avant le week-end";
        break;
    default:
        echo "Jour normal";
}

?>
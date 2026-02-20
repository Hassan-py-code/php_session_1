






<?php   


   $content="Hello PHP";

   echo "longueur: " . strlen($content) . "<br>";
   echo "Majuscules : " . strtoupper($content) . "<br>";
   echo "Minuscules :" . strtolower($content) . "<br>";



   $nouvellePhrase = str_replace("PHP" , "lomone", $content) . "<br>";

   echo "Replace: " . $nouvellePhrase . "<br>";


   $list = "Html , css , js" ."<br>";
   $techs = explode("," , $list);

   echo "Technologies :" . implode(" | " , $techs);


   $text =" Bonjour ";
   echo "Text Nettoyé '" . trim($text);


   


?>
<?php
$numbers = range(1, 100);
foreach($numbers as $i) {
   try{
       switch($i)
       {
            case (($i%3 == 0) && ($i%5 == 0)) :
                echo "Linianos\n";
            break;
           case ($i%3 == 0) :
               echo "Linio\n";
            break;
            case ($i%5 == 0) :
                echo "IT\n";
            break;
       }
   } catch(Exception $e) {
       echo "Exception at ".$e;
   }
}

?>
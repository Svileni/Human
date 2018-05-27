<html>
    
<?php

include ('human.php');
    
$pera = new Human ('Petar', 'Petrovic', 'muskarac', 43, 'plava', 'crne', 'nastavnik');

echo 'Nas novi clan je ' . $pera->getFirstName() . ' ' . $pera->getLastName() . ' po zanimanju ' . $pera->getOccupation() . ' star ' . $pera->getAge() . ' godine. Karakteristicnog je izgleda, kosa mu je  ' . $pera->getHearColor() . ' a oci ' . $pera-> getEyeColor() . ' boje.' ; 
    
?>



</html>
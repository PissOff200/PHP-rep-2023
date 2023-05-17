<?php
$dias=[ "Monday" , " Tuesday" , " Wednesday" , " Thursday" ," Friday" , " Saturday" , "Sunday"];
sort($dias) ;
Class Impressora {
   //Atributs
    public $tinta = true ;
    public $paper= true;
    public $tamany = "DINA4";
    public $color = "negre";
    //Metodes
    public function imprimex($tinta , $paper , $tamany , $color) {
        if ($tinta && $paper && $color) {
            echo "Es pot imprimir en " . $tamany , "en" .$color;
        } else{
            echo ` Falta tinta o paper`;
        }
    }
    
}
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Impressio del document </title>
</head>
<body>
    <h1>Titular del document</h1>
    <ul>
        <?php
            foreach ($dias as $dia) {
                echo "<li>$dia</li>";
            }
            
        
        ?>
    </ul>

</body>
</html> 

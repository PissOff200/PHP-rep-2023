<?php
print("Hola mundo<br>");
print "print() también funciona sin paréntesis.<br>";

print "Esto separa
múltiples líneas. Los saltos de línea también
se mostrarán<br>";

print nl2br('1Esto separa\n múltiples líneas. Los saltos de línea también\nse mostrarán.<br>');//comillas simples no entiende \n

print nl2br("2Esto separa\nmúltiples líneas. Los saltos de línea también\nse mostrarán.\n");//comillas dobles SI entiende \n

// También se puede usar variables usando print
$foo = "foobar";
$bar = "barbaz";

print "foo es $foo"; // foo es foobar
print '<br>' . $bar . '<br>';
// También se pueden usar arrays
$bar = array("value" => "valor");

print "Esto es {$bar['value']} !"; // Esto es valor !
print '<br>';
$fruita = ["platano", "limon", "manzana"];
print implode(", ", $fruita) . " son frutas"; //función implode muestra: platano, limon, manzana
print '<br>';

// Al usar comillas simples se mostrará el nombre de la variable, no su valor
print 'foo is $foo'; // foo is $foo
print '<br>';
// Si no se necesita mostrar otros caracteres, se puede simplemente mostrar variables
print "Para escapar caracteres se hace \"así\".";

print $foo;          // foobar
print '<br>';

$variable = "variable";

print <<<END
Este párrafo utiliza la sintaxis "here document" para mostrar
múltiples líneas con la interpolación de $variable. Nótese
que el terminador de here document debe aparecer al final
de la línea con punto y coma y ¡ningún espacio en blanco extra!
END;
?>
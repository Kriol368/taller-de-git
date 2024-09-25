<?php
// Autor: Kriol368 <andreubeltran2004@gmail.com>
require('Holamundo.php')
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>

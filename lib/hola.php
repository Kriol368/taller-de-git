<?php
// Autor: Kriol368 <andreubeltran2004@gmail.com>
print "Introduce tu nombre:";
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
?>

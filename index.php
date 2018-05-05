<?php
/**
 * Index Tarea UD6
 * @author Alberto García
 * @version 1.0.1
 */
require_once("Clase.php");
/**
 * Instanciamos la clase.
 */
$miClase = new Clase('publica', 'privada');

/**
 * Mostramos variable pública.
 */
echo "<p>Varíable pública: " . $miClase->getVarPublica();
/**
 * Mostramos variable privada.
 */
echo "<p>Variable privada: " . $miClase->getVarPrivada();
/**
 * Mostramos si una palabra es palíndromo o no.
 */
echo "<p>Es palíndromo?: " . ($miClase->esPalindromo("prueba") ? "Si" : "No");
/**
 * Mostramos si un número es primo o no.
 */
echo "<p> Es primo? " . ($miClase->esPrimo(4) ? "Si" : "No");
/**
 * Mostramos cual es el mayor de dos numeros.
 */
echo "<p> El mayor es: " . $miClase->saberMayor(100, 200);
/**
 * Mostramos el resultado de resolver una ecuacion.
 */
echo "<p> x = " . $miClase->resolverEcuacion(10, 20);
/**
 * Mostramos si un año es bisiesto o no.
 */
echo "<p></p> Es bisiesto? " . ($miClase->esBisiesto(2020) ? "Si" : "No");

?>
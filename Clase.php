<?php

/**
 * Clase
 * @author Alberto García
 * @version 1.0
 */
class Clase
{
    /**
     * Constante
     */
    const MI_NOMBRE = 'Alberto';
    /**
     * Variable publica
     * @var string
     * @access public
     */
    public $varPublica = '';
    /**
     * Variable privada
     * @var string
     * @access private
     */
    private $_varPrivada = '';

    /**
     * Clase constructor.
     * @param string $varPublica
     * @param string $varPrivada
     */
    public function __construct($varPublica, $varPrivada)
    {
        $this->varPublica = $varPublica;
        $this->_varPrivada = $varPrivada;
    }

    /**
     * Funcion que devuelve el valor de varPublica
     * @return string
     */
    public function getVarPublica()
    {
        return $this->varPublica;
    }

    /**
     * Funcion que devuelve el valor de varPrivada
     * @param string $varPublica
     */
    public function setVarPublica($varPublica)
    {
        $this->varPublica = $varPublica;
    }

    /**
     * @return string
     */
    public function getVarPrivada()
    {
        return $this->_varPrivada;
    }

    /**
     * @param string $_varPrivada
     */
    public function setVarPrivada($_varPrivada)
    {
        $this->_varPrivada = $_varPrivada;
    }


    /**
     * Función que determina si una palabra es palíndromo
     * Tiene que recibir la palabra a determinar si es palíndromo o no
     * Devuelve True o False
     * @param $cadena
     * @return bool
     */
    public function esPalindromo($cadena)
    {
        if ($cadena == strrev($cadena)) {//strrev invierte la cadena.
            return true;
        } else {
            return false;
        }
    }

    /**
     * Función que determina si un numero es primo
     * Tiene que recibir el numero a determinar si es primo o no
     * Devuelve True o False
     * @param $num
     * @return bool
     */
    public function esPrimo($num)
    {
        $cont = 0;
        // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {
                # Si se puede dividir por algun numero mas de una vez, no es primo
                if (++$cont > 1)
                    return false;
            }
        }
        return true;
    }


    /**
     * Función que determina cual es el mayor de dos números.
     * Tiene que recibir dos números para determinar cual es el mayor.
     * Devuelve el mayor de dos números.
     * @param $num1
     * @param $num2
     * @return mixed
     */
    public function saberMayor($num1, $num2)
    {
        return max($num1, $num2);//max devolverá el número más alto.
    }

    /**
     * Función que Resuelve unha ecuación de primer grado del tipo ax+b=0
     * Tiene que recibir dos números para determinar el valor de x.
     * Devuelve el valor de x.
     * @param $a
     * @param $b
     */
    public function resolverEcuacion($a, $b)
    {
        if ($a != 0) {
            return -$b / $a;
        } else {
            return 0;
        }

    }

    /** Función que determina si un año es bisiesto o no.
     * Tiene que recibir el año.
     * Devuelve true o false.
     * @param $ano
     * @return bool
     */
    public function esBisiesto($ano)
    {
        return ($ano % 4 == 0 and $ano % 100 != 0 or $ano % 400 == 0);
    }

}
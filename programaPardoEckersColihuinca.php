<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/** Función para el menu de opciones
* @param int $numero
* @return 
*
*/

function seleccionarOpcion($numOpcion){

    if ($numOpción == 1) {
        function jugar()
    };
}



/** Función para que el usuario ingrese un numero
* @param int $num $min $max
* @return int
*
*/

function solicitarValor($min , $max){
    $min = 1;
    $max = 7;
    echo "Ingrese un número de opción:";
    $num = trim(fgets(STDIN));
        if ($num <= $max || >= $max) {
            echo "El número ingresado corresponde a una opción";
        } else { 
            echo "Ingrese un número válido";
        };
}



/** Función para el menu de opciones
* @param int $numero
* @return int
*
*/
function seleccionarOpcion($numero){
echo " Menú de opciones:
n/1) Jugar al tateti 
n/2) Mostrar un juego 
n/3) Mostrar el primer juego ganador 
n/4) Mostrar porcentaje de Juegos ganados 
n/5) Mostrar resumen de Jugador 
n/6) Mostrar listado de juegos Ordenado por jugador O 
n/7) salir 
n/Elige una opción:
"
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
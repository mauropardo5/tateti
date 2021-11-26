<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */

/* Mauro Sebastian Pardo -  Legajo 3570 - MAIL: mauro.pardo@est.fi.uncoma.edu.ar - Usuario github: mauropardo5 */
/* Colihuinca Maximiliano Ezequiel** - Legajo 3697 - MAIL: maximiliano.colihuinca@est.uncoma.edu.ar - Usuario: Zekecolin */
/* Eckers Patricio - Legajo 3548 - MAIL: patricioeckers@gmail.com - Usuario: patricioeckersfai-3548 */






/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
 
 /*FUNCION cargarJuegos
 en esta funcion se cargaran la lista de juegos 
jugadorCruz	jugadorCirculo	puntosCruz	puntosCirculo
return array*/

function cargarJuegos(){
    $coleccionDeJuegos = [];
    $coleccionDeJuegos[0]= ["jugadorCruz"=>"juan" ,	 
                            "jugadorCirculo"=> "martin" ,
                            "puntosCruz"=>5 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[1]=[ "jugadorCruz"=>"facu" ,	 
                            "jugadorCirculo"=> "enzo" ,
                            "puntosCruz"=>0 ,
                            "puntosCirculo"=>4];
    
    $coleccionDeJuegos[2]=[ "jugadorCruz"=>"martin" ,	 
                            "jugadorCirculo"=> "juan" ,
                            "puntosCruz"=>1 ,
                            "puntosCirculo"=>1];
    
    $coleccionDeJuegos[3]= ["jugadorCruz"=>"matias" ,	 
                            "jugadorCirculo"=> "facu" ,
                            "puntosCruz"=>0 ,
                            "puntosCirculo"=>4];
    
    $coleccionDeJuegos[4]=[ "jugadorCruz"=>"martin" ,	 
                            "jugadorCirculo"=> "facu" ,
                            "puntosCruz"=>5 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[5]=[ "jugadorCruz"=>"juan" ,	 
                            "jugadorCirculo"=> "martin" ,
                            "puntosCruz"=>1 ,
                            "puntosCirculo"=>1];
    
    $coleccionDeJuegos[6]=[ "jugadorCruz"=>"marta" ,	 
                            "jugadorCirculo"=> "matias" ,
                            "puntosCruz"=>0 ,
                            "puntosCirculo"=>5];
    
    $coleccionDeJuegos[7]= [ "jugadorCruz"=>"maxi" ,	 
                            "jugadorCirculo"=> "enzo" ,
                            "puntosCruz"=>4 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[8]= [ "jugadorCruz"=>"matias" ,	 
                            "jugadorCirculo"=> "maxi" ,
                            "puntosCruz"=>4 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[9]= [ "jugadorCruz"=>"matias" ,	 
                            "jugadorCirculo"=> "maxi" ,
                            "puntosCruz"=>1 ,
                            "puntosCirculo"=>1];
    
    return ($coleccionDeJuegos) ;
    
    }
 
/*Funcion resumen de un Jugador
* @param void
* @return array
 */
function resumenJugador()
{
    $resumenJugador = [];
    $resumenJugador[0] = ["nombre" => "juan" , "juegosGanados" => 1 , "juegosPerdidos" => 0 , "JuegosEmpatados" => 2 , "puntAcumulados" => 7];
    $resumenJugador[1] = ["nombre" => "martin" , "juegosGanados" => 1 , "juegosPerdidos" => 1 , "JuegosEmpatados" => 2 , "puntAcumulados" => 7];
    $resumenJugador[2] = ["nombre" => "matias" , "juegosGanados" => 1 , "juegosPerdidos" => 1 , "JuegosEmpatados" => 1 , "puntAcumulados" => 6];
    $resumenJugador[3] = ["nombre" => "facundo" , "juegosGanados" => 1 , "juegosPerdidos" => 2 , "JuegosEmpatados" => 0 , "puntAcumulados" => 4];
    $resumenJugador[4] = ["nombre" => "enzo" , "juegosGanados" => 1 , "juegosPerdidos" => 1 , "JuegosEmpatados" => 0 , "puntAcumulados" => 4];
    $resumenJugador[1] = ["nombre" => "maxi" , "juegosGanados" => 1 , "juegosPerdidos" => 1 , "JuegosEmpatados" => 1 , "puntAcumulados" => 5];

    return ($resumenJugador);
}

 
/** Modulo para solicitar numero solicitarValor
 * @param int $min ; $max
 * @return int
 */
$min = 1;
$max = 7;
function solicitarValor(){
    $min = 1;
    $max = 7;
    do {
      echo "Ingrese un número entre el 1 y el 7: ";
      $numeroOpcion = trim(fgets(STDIN));
      if($numeroOpcion >= $min && $numeroOpcion <= $max){
    return $numeroOpcion;
    }
    else{
    echo "error en el valor ingresado, ingrese nuevamente el valor. ";
    }
} 
    while ($numeroOpcion < $min || $numeroOpcion > $max  );
 
}
 
 
/** Función para el menu de opciones seleccionarOpcion
* int $numero
* return void
*
*/
function seleccionarOpción(){
    echo " Menú de opciones:
        1) Jugar al tateti
        2) Mostrar un juego
        3) Mostrar el primer juego ganador
        4) Mostrar porcentaje de Juegos ganados
        5) Mostrar resumen de Jugador
        6) Mostrar listado de juegos Ordenado por jugador O
        7) salir
        Elige una opción: ";
    $numero = SolicitarValor();
 
return $numero;
}
 

/**funcion mostrarJuego
 * se encarga de agregar un juego mas al array total de juegos.
 * param array  $juegos
 */
function mostrarJuego($juegos){
    // STRING $ganoX,$ganoO, $empate
    $ganoX = "gano X ";
    $ganoO= "gano O ";
    $empate = "Empate ";
    $acumuladorGanador = "";
    do{
        echo "elija el numero de juego que quiere mostrar ";
        $numeroDeJuego = trim(fgets(STDIN));
        if($numeroDeJuego >=1 && $numeroDeJuego <= 10 ){
            $juegoSeleccionado = $juegos ;
            $numeroAuxiliar= $numeroDeJuego -1;
            if($juegoSeleccionado[$numeroAuxiliar]["puntosCruz"]>=4 && $juegoSeleccionado[$numeroAuxiliar]["puntosCruz"]<=5){
                $acumuladorGanador = $ganoX;
            } 
            elseif($juegoSeleccionado[$numeroAuxiliar]["puntosCruz"] = 1){
                $acumuladorGanador = $empate;
            }
            else{
                $acumuladorGanador = $ganoO;

            }
            
            echo "\n Juego Tateti: ". $numeroDeJuego." " . $acumuladorGanador. 
            "\n Jugador X:". $juegoSeleccionado[$numeroAuxiliar]["jugadorCruz"] . " obtuvo ". $juegoSeleccionado[$numeroAuxiliar]["puntosCruz"] . " puntos ". 
            "\n Jugador O:". $juegoSeleccionado[$numeroAuxiliar]["jugadorCirculo"]. " obtuvo ".  $juegoSeleccionado[$numeroAuxiliar]["puntosCirculo"];



        }
        else{
            echo "ese numero de juego no se encuentra en el sistema. digite nuevamente. ";
        }
    

       
    }   while ($numeroDeJuego< 1 || $numeroDeJuego > 10);
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
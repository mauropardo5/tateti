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

/**
 * Esta funcion compara la clave "jugadorCirculo" del array principal y retorna un valor segun la relacion entre estas
 * @param array $a
 * @param array $b
 * @return int
 */
function cmp($a, $b){
    //int $orden
    if($a["jugadorCirculo"]== $b["jugadorCirculo"]){
        $orden = 0; 
    } elseif($a["jugadorCirculo"]<$b["jugadorCirculo"]){
        $orden = -1;
    } else{
        $orden = 1;
    }
    return $orden;

}

/**
 * funcion Esta funcion ordena por nombre usando la funcion uasort
 * @param array $juegosT
 */
function ordenarAlfabeticamente($juegosT){
// uasort nos ordena la coleccion de juegos con la función "cmp"
uasort($juegosT, 'cmp'); 
print_r($juegosT);
}


/** funcion primerJuegoGanado
 * muestra la primera partida que un jugador gano, en caso de no ganar ninguna  muestra -1.
	*@param array $partidasTotales($coleccionDeJuegos)
	*@param string $nombreJugador
    *@return int $indice
*/


function primerJuegoGanado($partidasTotales, $nombreJugador){
    //int $indice, $i  
    //boolean $flag
   
    $i=0;
    $flag = true;
   
   do{
       if($partidasTotales[$i]["jugadorCruz"] == $nombreJugador){
          if($partidasTotales[$i]["puntosCruz"]>$partidasTotales[$i]["puntosCirculo"]){
              $indice = $i;
              $flag = false;
          }
       }elseif($partidasTotales[$i]["jugadorCirculo"] == $nombreJugador){
           if($partidasTotales[$i]["puntosCruz"]<$partidasTotales[$i]["puntosCirculo"]){
              $indice = $i;
              $flag = false;
          }
       }
   
       if($i >= count($partidasTotales)){
          $flag = false;
          $indice = -1; 
       }
       $i =$i+1;

      }
    while($flag);
     
return $indice;
   }

/** Funcion que retorna la cantidad de juegos ganados sin importar si es X o O
 * @param array $galeriaJuegos // funcion resumenJugador
 * @return int
 */
function juegosGanados($galeriaJuegos){
    $variableSuma = 0;
    $variableAuxiliar = $galeriaJuegos;
    $contador = count($variableAuxiliar);
    for ($numero =0; $numero < $contador  ; $numero ++) {
    if ($variableAuxiliar[$numero]["juegosGanados"]== 1) {
        $variableSuma = $variableSuma + 1;
    }
    }
    return $variableSuma;
    }


/*FUNCION elegirSimbolo
 en esta funcion solicita al jugador elegir entre X (cruz) o O (circulo)
 STRING  $cruz , $circulo
 RETORNO STRING*/

 function elegirSimbolo(){
    $cruz = "X";
    $circulo= "O";
    do {
    echo "Seleccione el simbolo que desee utilizar (X: cruz - O: circulo):";
    $simbolo = trim(fgets(STDIN));
    $simbolo = strtoupper($simbolo); //funcion para que convierta en mayuscula
        if ($simbolo == $cruz) {
            return $simbolo;
        }elseif ($simbolo == $circulo) {
            return $simbolo;
        }else {
            echo "El simbolo ingresado no es correcto, ingreselo nuevamente:";
        }
    } while ($simbolo != $cruz or $simbolo != $circulo);
     

 }




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
* esta funcion nos muestra el resumen de partidas del jugador solicitado.
* @param array $juegos
* @param  string $nombreJugador
* @return array
 */
function resumenJugador($juegosTotales5,$nombreJugador){
    //int $totalJ, $ganados, $perdidos, $empatados, $puntos, $n
     $totalJ=count($juegosTotales5);
     $ganados = 0;
     $perdidos = 0;
     $empatados = 0;
     $puntos =  0;
     $resumenJ["nombre"]=$nombreJugador;
 
     for($n =0; $n< $totalJ ; $n++ ) {
     
         //averiguamos si el jugador solicitado jugo como CRUZ
         if($nombreJugador== $juegosTotales5[$n]["jugadorCruz"]){
             //averiguamos si gano , empato o perdio segun los puntos acumulados en la partida $n
             if($juegosTotales5[$n]["puntosCruz"]>$juegosTotales5[$n]["puntosCirculo"]){
                 $ganados= $ganados +1;
                 $puntos = $puntos + $juegosTotales5[$n]["puntosCruz"];
             }elseif ($juegosTotales5[$n]["puntosCruz"] == $juegosTotales5[$n]["puntosCirculo"]){
                 $empatados =$empatados +1;
                 $puntos = $puntos +$juegosTotales5[$n]["puntosCruz"];
 
             }else{
                 $perdidos=$perdidos +1;
             }
         }
         //en caso que haya jugado como circulo
         elseif ($nombreJugador== $juegosTotales5[$n]["jugadorCirculo"]){
             //averiguamos si gano , empato o perdio segun los puntos acumulados en la partida $n
 
             if($juegosTotales5[$n]["puntosCirculo"]>$juegosTotales5[$n]["puntosCruz"]){
                 $ganados= $ganados +1;
                 $puntos = $puntos + $juegosTotales5[$n]["puntosCirculo"];
             }elseif ($juegosTotales5[$n]["puntosCruz"] == $juegosTotales5[$n]["puntosCirculo"]){
                 $empatados =$empatados +1;
                 $puntos = $puntos +$juegosTotales5[$n]["puntosCirculo"];
 
             }else{
                 $perdidos=$perdidos +1;
             }
 
         }
     }
     //asignamos los datos obtenido a las claves de nuestro nuevo array, y lo retornamos
     $resumenJ["juegosGanados"] = $ganados;
     $resumenJ["juegosEmpatados"]=$empatados;
     $resumenJ["juegosPerdidos"]= $perdidos;
     $resumenJ["puntos"]=$puntos;
 
     return $resumenJ;
 }

 
/** Modulo para solicitar numero solicitarValor
 * @param void
 * @return int
 */

function solicitarValor(){
    // $min y $max nos marcan el rango de numeros que pueden seleccionarse
    // int $min , $max.
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
        //utilizamos una funcion para solicitar el numero correcto de retorno
    $numero = SolicitarValor();
 
return $numero;
}
 

/**funcion mostrarJuego
 * se encarga de agregar un juego más al  total de juegos.
 * param array  $juegos
 */
function mostrarJuego($juegos){
    // STRING $ganoX,$ganoO, $empate
    $ganoX = "gano X ";
    $ganoO= "gano O ";
    $empate = "Empate ";
    $acumuladorGanador = "";
    $t = count($juegos) ;
    do{
        echo "elija el numero de juego que quiere mostrar:  ";
        $numeroDeJuego = trim(fgets(STDIN));
           
        if($numeroDeJuego >=1 && $numeroDeJuego <= $t ){
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
            "\n Jugador X: ". $juegoSeleccionado[$numeroAuxiliar]["jugadorCruz"] . " obtuvo ". $juegoSeleccionado[$numeroAuxiliar]["puntosCruz"] . " puntos ". 
            "\n Jugador O: ". $juegoSeleccionado[$numeroAuxiliar]["jugadorCirculo"]. " obtuvo ".  $juegoSeleccionado[$numeroAuxiliar]["puntosCirculo"]. " puntos";



        }
        else{
            echo "ese numero de juego no se encuentra en el sistema. digite nuevamente. ";
        }
    

       
    }   while ($numeroDeJuego< 1 || $numeroDeJuego > $t);
}

/* 
* @param array $juegosSimbolos//funcion cargarJuegos
* @param string $simbolo
* @return int
*/
function juegosGanadosSimbolo($juegosSimbolos, $simbolo){
    $simbolosJuegos = $juegosSimbolos;
	$variableSimbolo = $simbolo;
    $variableSimbolo = strtoupper($variableSimbolo);
	$hasta = count($simbolosJuegos);
	$variableAuxSuma = 0;
    if($variableSimbolo == "X"){
        for ($de =0; $de < $hasta  ; $de ++){
            if($simbolosJuegos[$de]["puntosCruz"] >= 4){
                $variableAuxSuma = $variableAuxSuma + 1;
            }
        }
    }
    else {
        for($de =0; $de < $hasta  ; $de ++){
            if($simbolosJuegos[$de]["puntosCirculo"] >= 4){
                $variableAuxSuma = $variableAuxSuma + 1;
            }
        }
    }
    return $variableAuxSuma;
}
/**FUNCION agregarJuego
 * en esta funcion se agregara un juego nuevo en el array $coleccionJuegos
 *  @param array $totalJuegos($coleccionJuegos) , $juegoNuevo($juego)
 *   @return array
 */

 function agregarJuego($totalJuegos, $juegoNuevo){
     //int $r
      $r = count($totalJuegos);
      $totalJuegos[$r]= $juegoNuevo;
      return $totalJuegos;
 }

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/**
 * int $opcion, $mostraJuego, $i, $games, $number, $limite, $variable, $variable1, $variable2, $variable3 
 * string $nombreJugador, $simb
 * bolean
 * float $porcentaje
 * array $juegos, $juego , $mostrarUnJuego, $jugadorResumen, 
 */
do {
    $juegos = cargarJuegos();
    $opcion = seleccionarOpción();
 
   
    switch ($opcion) {
        case 1:
 		$juego = jugar();
         print_r($juego);
        imprimirResultado($juego);

        $juegos = agregarJuego($juegos, $juego);
        
            break;
        case 2:
            $juegosTot = agregarJuego($juegos, $juego);
		    $mostraUnJuego = mostrarJuego($juegosTot);
            break;
        case 3:
		echo "Ingrese el nombre de un jugador: ";
		$nombreJugador = trim(fgets(STDIN));	
		$mostraJuego = primerJuegoGanado($juegos, $nombreJugador);
        $i = $mostraJuego + 1;
        echo "la primer partida que gano ". $nombreJugador. ", fue la partida numero: ". $i ."\n";
            break;
      case 4:
		echo "Ingrese un símbolo (X o O): ";
		$simb = trim(fgets(STDIN));
          
		$number = juegosGanadosSimbolo($juegos, $simb);
		$games = count($juegos);
   //FLOAT 
        $porcentaje = ($number * 100 )/ $games;
		echo "El simbolo ". $simb. " gano el ". $porcentaje. "% de los juegos";
        break;
	case 5:
		//variablesAuxiliares
		
		echo "Ingrese el nombre del jugador: ";
		$nombreJugador = trim(fgets(STDIN));
		$jugadorResumen = resumenJugador($juegos, $nombreJugador);
		
        $variable = 0;
		$variable1 = 0;
		$variable2 = 0;
		$variable3 = 0;
            if($jugadorResumen["nombre"] == $nombreJugador){
              $variable = $jugadorResumen["juegosGanados"];
              $variable1 = $jugadorResumen["juegosPerdidos"];
              $variable2 = $jugadorResumen["juegosEmpatados"];
              $variable3 = $jugadorResumen["puntos"];
             }

         echo "Jugador: ". $nombreJugador. "\nGano: ". $variable. " Juegos". "\nPerdió: ". $variable1. " Juegos". "\nEmpato: ". $variable2. " Juegos". "\nTotal de puntos acumulados: ". $variable3;
        
        
        break;


        case 6:
 		$ordenAlfa 	= ordenarAlfabeticamente($juegos);

         break;

         case 7;
         echo "Fin del programa";
         break;
		
 
 
    }
} while ($opcion != 7 );
//Declaración de variables:


//Inicialización de variables:


//Proceso:


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
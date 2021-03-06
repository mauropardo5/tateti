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
    $coleccionDeJuegos[0]= ["jugadorCruz"=>"JUAN" ,	 
                            "jugadorCirculo"=> "MARTIN" ,
                            "puntosCruz"=>5 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[1]=[ "jugadorCruz"=>"FACU" ,	 
                            "jugadorCirculo"=> "ENZO" ,
                            "puntosCruz"=>0 ,
                            "puntosCirculo"=>4];
    
    $coleccionDeJuegos[2]=[ "jugadorCruz"=>"MARTIN" ,	 
                            "jugadorCirculo"=> "JUAN" ,
                            "puntosCruz"=>1 ,
                            "puntosCirculo"=>1];
    
    $coleccionDeJuegos[3]= ["jugadorCruz"=>"MATIAS" ,	 
                            "jugadorCirculo"=> "FACU" ,
                            "puntosCruz"=>0 ,
                            "puntosCirculo"=>4];
    
    $coleccionDeJuegos[4]=[ "jugadorCruz"=>"MARTIN" ,	 
                            "jugadorCirculo"=> "FACU" ,
                            "puntosCruz"=>5 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[5]=[ "jugadorCruz"=>"JUAN" ,	 
                            "jugadorCirculo"=> "MARTIN" ,
                            "puntosCruz"=>1 ,
                            "puntosCirculo"=>1];
    
    $coleccionDeJuegos[6]=[ "jugadorCruz"=>"MARTA" ,	 
                            "jugadorCirculo"=> "MATIAS"  ,
                            "puntosCruz"=>0 ,
                            "puntosCirculo"=>5];
    
    $coleccionDeJuegos[7]= [ "jugadorCruz"=>"MAXI" ,	 
                            "jugadorCirculo"=> "ENZO" ,
                            "puntosCruz"=>4 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[8]= [ "jugadorCruz"=>"MATIAS"  ,	 
                            "jugadorCirculo"=> "MAXI" ,
                            "puntosCruz"=>4 ,
                            "puntosCirculo"=>0];
    
    $coleccionDeJuegos[9]= [ "jugadorCruz"=>"MATIAS"  ,	 
                            "jugadorCirculo"=> "MAXI" ,
                            "puntosCruz"=>1 ,
                            "puntosCirculo"=>1];
                            $coleccionDeJuegos = [];

                            $jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
                            $jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
                            $jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
                            $jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
                            $jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
                            $jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
                            $jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
                            $jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
                            $jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
                            $jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];
                            
                            array_push($coleccionDeJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);
                            
    return ($coleccionDeJuegos) ;
        }

/** Funci??n para el menu de opciones seleccionarOpcion
* @param void
* @return void
*
*/
function seleccionarOpci??n(){
    echo "\nMen?? de opciones:
        1) Jugar al tateti
        2) Mostrar un juego
        3) Mostrar el primer juego ganador
        4) Mostrar porcentaje de Juegos ganados
        5) Mostrar resumen de Jugador
        6) Mostrar listado de juegos Ordenado por jugador O
        7) salir
        Elige una opci??n: ";
        //utilizamos una funcion para solicitar el numero correcto de retorno
    $numero = SolicitarValor(1,7);
 
return $numero;
}


/** Modulo para solicitar numero solicitarValor
 * @param void
 * @return int
 */

function solicitarValor($min,$max){
    // $min y $max nos marcan el rango de numeros que pueden seleccionarse
    // int $min , $max.

    do {
      echo "\nIngrese un n??mero valido : ";
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
//
//

/** funcion mostrarJuego
 * se encarga de agregar un juego m??s al  total de juegos.
 * @param array  $juegos
 */
function mostrarJuego($juegos){
    // STRING $ganoX,$ganoO, $empate
    $ganoX = "(gano X )";
    $ganoO= "(gano O )";
    $empate = "(Empate )";
    $acumuladorGanador = "";
    $t = count($juegos) ;
    echo"elija el juego que desea mostrar\n";
    $numeroDeJuego=solicitarValor(0,$t);
    $juegoSeleccionado = $juegos ;
    $numeroAuxiliar= $numeroDeJuego -1;
    if($juegoSeleccionado[$numeroAuxiliar]["puntosCruz"]>=2 && $juegoSeleccionado[$numeroAuxiliar]["puntosCruz"]<=6){
                $acumuladorGanador = $ganoX;
            } 
    elseif($juegoSeleccionado[$numeroAuxiliar]["puntosCruz"] == 1){
                $acumuladorGanador = $empate;
            }
    else{
                $acumuladorGanador = $ganoO;

            }
            
              
echo "\n Juego Tateti: ". $numeroDeJuego." " . $acumuladorGanador. 
     "\n Jugador X: ". $juegoSeleccionado[$numeroAuxiliar]["jugadorCruz"] . " obtuvo ". $juegoSeleccionado[$numeroAuxiliar]["puntosCruz"] . " puntos ". 
     "\n Jugador O: ". $juegoSeleccionado[$numeroAuxiliar]["jugadorCirculo"]. " obtuvo ".  $juegoSeleccionado[$numeroAuxiliar]["puntosCirculo"]. " puntos";

}

//
//
/** FUNCION agregarJuego
 * en esta funcion se agregara un juego nuevo en el array $coleccionJuegos
 *  @param array $totalJuegos($coleccionJuegos) , $juegoNuevo($juego)
 *   @return array
 */

function agregarJuego($totalJuegos, $juegoNuevo){
    //int $r
    if($juegoNuevo != null) {
     //   $r = count($totalJuegos);
     //  $totalJuegos[$r]= $juegoNuevo;
     array_push($totalJuegos, $juegoNuevo);
     
    }
    return $totalJuegos;

}


//
//
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
   
       elseif($i == count($partidasTotales)-1){
          $flag = false;
          $indice = -1; 
       }
       $i =$i+1;
       
      }
   
      while($flag);
return $indice;
   }

   //
   //
   /** Funcion resumen de un Jugador. esta funcion nos muestra el resumen de partidas del jugador solicitado
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
 //
 //
 /** FUNCION elegirSimbolo
 * en esta funcion solicita al jugador elegir entre X (cruz) o O (circulo)
 *  @param void
 *  @return string*/
  
 
function elegirSimbolo(){
    //string $cruz, $circulo, $simbolo
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
//
//
/** Funcion juegosGanados
 *  retorna la cantidad de juegos ganados sin importar si es X o O
 * @param array $galeriaJuegos // funcion resumenJugador
 * @return int
 */
function juegosGanados($galeriaJuegos){
    //array $variableAuxiliar
    //int $contador, $variableSuma,$numero 
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
//
//
/** funcion juegosGanadosSimbolo,
 * muestra los juegos ganados segun el simbolo, sin importar el jugador
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
//
//

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
 * funcion ordenarAlfabeticamente
 *  Esta funcion ordena por nombre usando la funcion uasort
 * @param array $juegosT
 */
function ordenarAlfabeticamente($juegosT){
// uasort nos ordena la coleccion de juegos con la funci??n "cmp"
uasort($juegosT, 'cmp'); 
print_r($juegosT);
}


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/**
 * Declaraci??n de variables:
 * int $opcion, $mostraJuego, $i, $games, $number, $limite, $variable, $variable1, $variable2, $variable3 
 * string $nombreJugador, $simb
 * bolean
 * float $porcentaje
 * array $juegos, $juego , $mostrarUnJuego, $jugadorResumen, 
 */
//Inicializaci??n de variables:

$juego=null;
do {
    $juegos = cargarJuegos();
   
    $opcion = seleccionarOpci??n();
 
   
    switch ($opcion) {
        case 1:

         $juego = jugar();

         print_r($juego);
         imprimirResultado($juego);
         $juegos = agregarJuego($juegos, $juego);
        
        break;
        case 2:
            $juegos = agregarJuego($juegos, $juego);
            $mostraUnJuego = mostrarJuego($juegos);
            break;

        case 3:

        $juegos = agregarJuego($juegos, $juego);
        echo "Ingrese el nombre de un jugador: ";
        $nombreJugador = strtoupper(trim(fgets(STDIN)));	
        $mostraJuego = primerJuegoGanado($juegos, $nombreJugador);
        $i = $mostraJuego + 1;
        if($i==0){
            echo"$nombreJugador no jugo ninguna partida";
        }else{
           echo "la primer partida que gano ". $nombreJugador. ", fue la partida numero: ". $i ."\n";
        }
            
        break;
           
               
      case 4:
        $juegos = agregarJuego($juegos, $juego);
        echo "Ingrese un s??mbolo (X o O): ";
        $simb = strtoupper( trim(fgets(STDIN)));
        
        $number = juegosGanadosSimbolo($juegos, $simb);
        if($simb == "X"){
            $aux=juegosGanadosSimbolo($juegos, "0");
        }
        elseif ($simb == "O") {
            $aux=juegosGanadosSimbolo($juegos,"X");
        }

        $games = $number + $aux;
   
        $porcentaje = ($number * 100 )/ $games;
        echo "El simbolo ". $simb. " gano el ". $porcentaje. "% de los juegos";
        break;
    
    case 5:
        //variablesAuxiliares
        $juegos = agregarJuego($juegos, $juego);
        
        echo "Ingrese el nombre del jugador: ";
        $nombreJugador =strtoupper( trim(fgets(STDIN)));
        
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

         echo "Jugador: ". $nombreJugador. "\nGano: ". $variable. " Juegos". "\nPerdi??: ". $variable1. " Juegos". "\nEmpato: ". $variable2. " Juegos". "\nTotal de puntos acumulados: ". $variable3;
        
        
        break;


        case 6:

            $juegos = agregarJuego($juegos, $juego);
         $ordenAlfa 	= ordenarAlfabeticamente($juegos);

         break;

         case 7;
         echo "Fin del programa";
         
         break;
 
    }
} while ($opcion != 7 );

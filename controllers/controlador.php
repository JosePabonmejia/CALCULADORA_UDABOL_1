<!-- CONTROLADOR DE LA CALCULADORA  -->
<?php
require_once ("../models/modelo.php");// REQUIERE MODELO DE LA CALCULADORA DE LA CARPETA....
$opcion=$_GET['opcion'];
$bs=$_GET['bs'];//PRIMER NUMERO
$bs2=$_GET['bs2'];//SEGUNDO NUMERO
$calcular=0;//RESULTADO CON VALOR INCIAL 0


switch ($opcion){// SELECCION DE CASO
  case "suma":
    $calcular= suma($bs,$bs2);
    break;
    case "resta":
      $calcular= resta($bs,$bs2);
      break;
      case "multiplicar":
        $calcular= multiplicacion($bs,$bs2);
        break;
        case "dividir":
          $calcular= division($bs,$bs2);
          break;
}
require_once ("../views/vistasalida.php");//REQUIERE EL FORMULARIO PARA SALIR
 ?>

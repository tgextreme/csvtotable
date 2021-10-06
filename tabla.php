<?php
@require_once '../Classes/dropboxapi/index.php';
///file_put_contents('texto.txt', file_get_contents("https://s3.eu-central-1.amazonaws.com/edi-customer-integration/Resellers/Pricelists/Blue/blue_euro_tab.txt"));
$max_time = ini_get('max_execution_time');
echo "el tiempo maximo es " . $max_time . "<br>";
$porcentaje_tiempo = $max_time * 0.80;

//Fuente: https://www.iteramos.com/pregunta/71585/obtener-max_execution_time-en-el-script-de-php
$start_time = microtime(true);
$file = fopen("texto.txt", "r");

echo "<table width='100%'>";
$linea = 1;
$i = 10;
$myFileVar = "dondeva.txt"; // aquí es donde queda el último producto que he añadido

$var11 = (int) "30224305";
$var12 = (int) "30225484";
$var13 = (int) "30226177";
$var14 = (int) "30225483";

//$var11 = (int)"11026748";
//$var12 = (int)"11026819";
//$var13 = (int)"11026823";
//$var14 = (int)"11026825";


if (file_exists($myFileVar)) {


    $gestor = fopen($myFileVar, "r");
    $varString = "variable";
    while (!feof($gestor)) {

        $varString = fgets($gestor);
    }
    $i = (int) $varString;
    fclose($gestor);
}

if ($i == 0) {
    $i = 1; //Si no existe el numero se pone 1
}

echo $i;
$archivo2 = fopen("texto.txt", "r"); /// Esto es el CSV de los datos y ahora lo vamos a recorrer
while (($datos = fgetcsv($archivo2)) !== FALSE) { //($datos = fgetcsv($fp)) !== FALSE //!feof($archivo2)
    try {

        if ($linea >= $i) {
            $c = $datos;
            $c = preg_replace('/["]/', '', $c);
            $c = preg_replace("/[']/", '', $c);
            $c = preg_replace("/[\/]+/", '/', $c);
            $c = preg_replace("/[,]{2,}/", ", ,", $c);


            $c[0] = intval(preg_replace('/-/', '', $c[0]));
            $d = $c;

            $id = preg_replace('/-/', '', $d[0]);

            $refgen = (int) $id;
            //echo $refgen."<br>";
            $Eimagen = false;





            if ($refgen == $var11 and !file_exists($var11 . ".txt")) {
                echo "existe $var11";
                $fp = fopen($var11 . ".txt", "w");

                mandarEmailFinal($var11);
                fwrite($fp, "Hola que tal");
            } else if ($refgen == $var12 and !file_exists($var12 . ".txt")) {
                echo "existe $var12";
                $fp = fopen($var12 . ".txt", "w");

                mandarEmailFinal($var12);
                fwrite($fp, "Hola que tal");
            } else if ($refgen == $var13 and !file_exists($var13 . ".txt")) {
                echo "existe $var13";
                $fp = fopen($var13 . ".txt", "w");

                mandarEmailFinal($var13);
                fwrite($fp, "Hola que tal");
            } else if ($refgen == $var14 and !file_exists($var14 . ".txt")) {
                echo "existe $var14";
                $fp = fopen($var14 . ".txt", "w");

                mandarEmailFinal($var14);
                fwrite($fp, "Hola que tal");
            }








            try {
                $end_time = microtime(true);
                $duration = $end_time - $start_time;
                $hours = (int)($duration / 60 / 60);
                $minutes = (int)($duration / 60) - $hours * 60;
                $seconds = (int)$duration - $hours * 60 * 60 - $minutes * 60;
                echo $duration . '<br>';


                $i = $i + 1;
                if ($porcentaje_tiempo > $duration) {
                    $numVar = "dondeva.txt";
                    $file = new SplFileObject($numVar, "w");
                    $written = $file->fwrite($i);
                }
                /*$fileVar = fopen($numVar, "w");
                fwrite($fileVar, $i);
                fclose($fileVar);*/
            } catch (Exception $ex) {
            }
        }
        $linea = $linea + 1;
    } catch (Exception $ex) {
    }
    //$contador=$contador+1;
}
fclose($file);


$i = 1;
$numVar = "dondeva.txt";
$fileVar = fopen($numVar, "w");
fwrite($fileVar, $i);
fclose($fileVar);

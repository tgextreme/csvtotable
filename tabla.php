<?php

echo "<table width='100%'>";
$i = 1;
$archivo2 = fopen("texto.txt", "r");
echo "<tr><td>0 </td><td>1 description</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7 precio</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td></tr>";
while (!feof($archivo2)) {


    $traer = fgets($archivo2);
    $c = preg_split("/[\t]+/", $traer);
    /*$c = preg_replace('/["]/', '', $c);
    $c = preg_replace("/[']/", '', $c);
    $c = preg_replace("/[\/]+/", '/', $c);
    $c = preg_replace("/[,]{2,}/", ", ,", $c);*/
    //  $c[8] = preg_replace('/[,]/', '.', $c);
    //   $c[8] =floatval($c[8]);
    $c[5] = preg_replace('/[,]/', '.', $c[5]);
    $c[7] = preg_replace('/[,]/', '.', $c[7]);
    $c[5] = (float)$c[5];
    $c[7] = (float)$c[7];

    $c[0] = intval(preg_replace('/-/', '', $c[0]));
    $d = $c;

    $id = preg_replace('/-/', '', $d[0]);



    $refgen = (int) $id;

    echo "<tr>";
    //var_dump($c);
    $description = 0;
    $description_short = 0;
    $meta_keywords;
    $width = 0;
    $height = 0;
    $depth = 0;
    $precio = 0;

    foreach ($c as $dat) {
        $referencia=$dat[0];
        $description = $dat[1];
        $description_short = substr($dat[1],0, 128);
        $meta_keywords=substr($dat[1],0, 64);
        $width = 1;
        $height = 1;
        $depth = 1;
        $precio = $dat[7];
        echo "<td>" . $dat . "</td>";
    }
    echo "</tr>";
    $i = $i + 1;
}
echo "</table>";
?>
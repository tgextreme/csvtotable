<?php
$query = urldecode($_GET["query"]);
$query=strtolower($query);
$file = fopen("mlb_players.csv", "r");
$patron = '/[a-zA-Z]*' . $query . '+[a-zA-Z]*/';
echo "<table width='100%'>";
$i = 1;
while (!feof($file)) {
    if ($i == 2) {
        $csv = fgetcsv($file);
        if (preg_match($patron, strtolower($csv[0]))) {
            echo "<tr>";

            foreach ( $csv as $c) {;
                echo "<td>" . $c . "</td>";
            }
            echo "</tr>";
        }
    }else if($i==1){
        echo "<tr>";
        $csv = fgetcsv($file);
            foreach ( $csv as $c) {;
                echo "<th>" . $c . "</th>";
            }
            echo "</tr>";
            $i=2;


    }
    
}
echo "</table>";

fclose($file);

<?php 
if (isset($_POST["mois"])&& isset($_POST["annee"])){
echo date($_POST["mois"].$_POST["annee"]);
}

$m=$_POST["mois"];
$a=$_POST["annee"];  
//chercher le nombre de jour pour chercher le nombre de case.
$number = cal_days_in_month(CAL_GREGORIAN,$m , $a);
echo "il y a " .$number ."jours";
var_dump($number);
$months[0]=" ";
$months[1]="janvier";
$months[2]="février";
$months[3]="mars";
$months[4]="avril";
$months[5]="mai";
$months[6]="juin";
$months[7]="juillet";
$months[8]="aout";
$months[9]="septembre";
$months[10]="octobre";
$months[11]="novembre";
$months[12]="décembre";
$string_month= '';

foreach ($months as $key=>$value){
    if ($m == $key) {
        $string_month = $value;
        echo $value." ".$a;
    }
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./custom.css">
</head>
<body>
    <div class="dates">
    <?php


echo '<div class="aff">' .$string_month." ".$a ."</div>";


?>
<div class="jours">
 <?php

for($i = 1; $i <= $number; $i++){
   
echo '<div class="jour">'.$i." </div>";
}
?>
</div>
</div>
</body>
</html>


<?php
function dumpArray(array $nested_arrays): void {
            foreach ($nested_arrays as $key => $value) {
                if (gettype($value) !== 'array') {
                    echo ('<li style="margin-left: 2rem;color: teal; background-color: white">'
                        . '<span style="color : steelblue;font-weight : bold;">'
                        . $key . '</span> : '
                        . $value . '</li>');
                } else {
                    /* ignore same level recursion */
                    if ($nested_arrays !== $value) {
                        echo ('<details><summary style="color : tomato; font-weight : bold;">'
                            . $key . '<span style="color : steelblue;font-weight : 100;"> ('
                            . count($value) . ')</span>'
                            . '</summary><ul style="font-size: 0.75rem; background-color: ghostwhite">');
                        dumpArray($value);
                        echo ('</ul></details>');
                    };
                };
            };
        };
    dumpArray($GLOBALS); 
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia de la semana</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
<tr>
<?php
    $i=1;
    while($i<=1000){
            echo "<td>";
            echo $i;
            echo "</td>";
        if ($i%5==0){
            echo "</tr>";
            echo "<tr>";
        }    
            $i=$i+1; 
    }
?>
</table>
</body>
</html>
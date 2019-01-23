<?php

function createMatrix($x, $y, &$matrix, &$cssClass)
{

    $value = 1;
    $firstColumn = 0;
    $firstRow = 0;
    $lastColumn = $y - 1;
    $lastRow = $x - 1;

    while ($value <= $x * $y) {
        for ($i = $firstColumn; $i <= $lastColumn; $i++) {
            $matrix[$firstRow][$i] = $value++;
            $cssClass[$firstRow][$i] = $i === $lastColumn ? 'down' : 'right';
            if ($value > $x * $y) {
                break 2;
            }


        }


        for ($i = $firstRow + 1; $i <= $lastRow; $i++) {
            $matrix[$i][$lastColumn] = $value++;
            $cssClass[$i][$lastColumn] = $i === $lastRow ? 'left' : 'down';
            if ($value > $x * $y) {
                break 2;
            }

        }

        for ($i = $lastColumn - 1; $i >= $firstColumn; $i--) {
            $matrix[$lastRow][$i] = $value++;
            $cssClass[$lastRow][$i] = $i === $firstColumn ? 'up' : 'left';
            if ($value > $x * $y) {
                break 2;
            }
        }

        for ($i = $lastRow - 1; $i > $firstRow; $i--) {
            $matrix[$i][$firstColumn] = $value++;
            $cssClass[$i][$firstColumn] = $i === $firstRow + 1 ? 'right ' : 'up';
            if ($value > $x * $y) {
                break 2;
            }
        }
        $firstColumn++;
        $firstRow++;
        $lastColumn--;
        $lastRow--;


    }
    $lastNum = $x * $y;
    echo '<table>';
    for ($i = 0; $i < $x; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $y; $j++) {
            $n = $matrix[$i][$j];
            if ($n === $matrix[0][0]) {
                echo "<td class=firstCell>";

            } elseif ($n === $matrix[0][1]) {
                echo "<td class=secondCell>";
            } else {
                echo '<td class=', ($n === $lastNum ? 'lastNum' : $cssClass[$i][$j]), '>';
            }

            echo $n;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="inputWord">
    <h3>INPUT</h3>
</div>

<div class="input">


    <form method="post">
        <p class="redovi">Broj redaka</p>
        <label>
            <input name="firstNum" type="text">
        </label><br/>
        <p>Broj stupaca</p>
        <label>
            <input name="secondNum" type="text">
        </label><br/>
        <input type="submit" value="KREIRAJ TABLICU">

    </form>


</div>
<div class="outputWord"><h3>OUTPUT</h3></div>
<div class="output">


    <?php
    createMatrix($_POST['firstNum'], $_POST['secondNum'], $matrix, $class);


    ?>
</div>


</body>
</html>

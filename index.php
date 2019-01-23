<?php

function createMatrix($x, $y)
{
    $matrix = [[]];
    $value = 1;
    $firstColumn = 0;
    $firstRow = 0;
    $lastColumn = $y-1;
    $lastRow = $x-1;

    while ($value <= $x * $y) {
        for ($i = $firstColumn; $i <= $lastColumn; $i++) {
            $matrix[$firstRow][$i] = $value++;
            if ($value > $x * $y) {
                break 2;
            }



        }
        for ($i =$firstRow+1; $i<= $lastRow; $i++){
            $matrix[$i][$lastColumn] = $value++;
            if ($value > $x * $y) {
                break 2;
            }
        }
        for ($i = $lastColumn-1; $i >= $firstColumn; $i--){
            $matrix[$lastRow][$i] = $value++;
            if ($value > $x * $y) {
                break 2;
            }
        }
        for ($i = $lastRow-1; $i > $firstRow; $i--){
            $matrix[$i][$firstColumn] = $value++;
            if ($value > $x * $y) {
                break 2;
            }
        }
        $lastRow--;
        $lastColumn--;
        $firstRow++;
        $firstColumn++;


    }
    for ($i = 0; $i < $x; $i++) {
        for ($j = 0; $j < $y; $j++) {
            echo $matrix[$i][$j];
        }
        echo "<br/>";
    }

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

<form method="post">
    <p>Broj redaka</p>
    <label>
        <input name="firstNum" type="text">
    </label><br/>
    <p>Broj stupaca</p>
    <label>
        <input name="secondNum" type="text">
    </label><br/>
    <input type="submit" value="KREIRAJ TABLICU">

</form>

<?php

createMatrix($_POST['firstNum'], $_POST['secondNum'])
?>

</body>
</html>

<?php

function createMatrix($x,$y)
{

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

<p><?php
    print_r($_POST['firstNum']);
    echo "<br/>";
    print_r($_POST['secondNum']);
    ?>
</p>
</body>
</html>

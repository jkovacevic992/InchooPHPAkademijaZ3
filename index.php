<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

<form method="post">
    <label>
        <input name="firstNum" type="text">
    </label><br/>
    <label>
        <input name="secondNum" type="text">
    </label><br/>
    <input type="submit" value="Submit">

</form>

<p><?php
    print_r($_POST['firstNum']);
    echo "<br/>";
    print_r($_POST['secondNum']);
    ?>
</p>
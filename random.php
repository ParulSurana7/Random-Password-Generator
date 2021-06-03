<html>

<head>
    <title>Random Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<div style=" margin: 35px; padding: 5px;word-wrap: break-word;">
    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['num'];
    } else {
        $input = 10;
    }
    $pswd = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_';
    $length_pswd = strlen($pswd);
    if ($input > $length_pswd) {

        $diff = $input / $length_pswd;
        $pswd_repeat = $pswd . str_repeat($pswd, $diff);

        echo "<h1><center> Your Random Password= "  . substr(str_shuffle($pswd_repeat), 0, $input) . " ' \n </center></h1>";
        echo "<center>$pswd</center>";
    } else {

        echo "<h1><center> Your Random Password= (" . $input . " digit) " . substr(str_shuffle($pswd), 0, $input) . " ' \n </center></h1>";
        echo "<center>$pswd</center>";
    }
    ?>
    <form action="random.php" method="post">
        <label for="pswd">Password Char</label>
        <input type="number" name="num" class="form-control" id="pswd" value="<?php echo $input; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

</html>
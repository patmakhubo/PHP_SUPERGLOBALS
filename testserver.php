<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_SERVER</title>
</head>
<body>
    <h1>Complete $_SERVER Collected Information</h1>
    <?php
        echo "<pre>";
        var_export($_SERVER);
        echo "</pre>";
    ?>
    <br><br><br>
    <h1>Some $_SERVER Collected Information Examples</h1>
    <?php
        echo "<i>PHP SELF : </i>" . $_SERVER['PHP_SELF'];
        echo "<br>";
        echo "<i>SERVER NAME : </i>" . $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo "<i>HTTP HOST : </i>" . $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo "<i>HTTP REFERER : </i>" . $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo "<i>HTTP USER AGENT : </i>" . $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo "<i>SCRIPT NAME : </i>" . $_SERVER['SCRIPT_NAME'];
    ?>
</body>
<footer>
    <br>
    <br>
    <br>Copyright &#169;. <?php echo date('Y'); ?> Thabang Makhubo
</footer>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_GET</title>
</head>

<body>

    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?subject=ITEC&institution=PIHE">Click here to Test $GET</a>
    <?php
    if (isset($_GET['subject']) && isset($_GET['institution'])) {
        printf("<h1>Study " . $_GET['subject'] . " at " . $_GET['institution'] . "</h1><br>");
    }
    ?>
</body>

<footer>
    <br>
    <br>
    <br>Copyright &#169;. <?php echo date('Y'); ?> Thabang Makhubo
</footer>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_REQUEST</title>
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Keyword: <input type="text" name="keyword" placeholder="Enter any word ">
        <input type="submit" value="Display Word">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collects value of input field discretely
        $keyword = $_REQUEST['keyword'];
        echo "<h1>";
        if (empty($keyword)) {
            echo "Keyword is empty";
        } else {
            echo "<i>Output : </i>" . $keyword;
        }
        echo  "</h1><br>";
    }
    ?>

</body>

<footer>
    <br>
    <br>
    <br>Copyright &#169;. <?php echo date('Y'); ?> Thabang Makhubo
</footer>

</html>
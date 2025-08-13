
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>ch1-get-post</title>
</head>
<body>
    <?php
    $currentTime = date("Y-m-d H:i:s");
    ?>
    <h2>Current Server Time: <?php echo $currentTime; ?></h2>

    <form action="" method="POST">
        <label>name:</label>
        <input type="text" name="username" required>
        <br><br>
        <label> color:</label>
        <input type="text" name="color" required>
        <br><br>
        <button type="submit">send</button>
        <button type="reset">reset</button>
    </form>

    <br>

    <hr>
    <h2>result: </h2>    
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['username'] ; 
    $color = $_POST['color'] ; 
    header(
        "Location: ?page=result&name=" . urlencode($name) . "&color=" . urlencode($color),
        true,
        303 
    );
    exit;
}

if (isset($_GET['page']) && $_GET['page'] === 'result') {
    $name  = $_GET['name'];
    $color = $_GET['color'];
    ?>
    <h1>Hello, <?php echo ($name); ?>!</h1>
    <p style="color: <?php echo htmlspecialchars($color); ?>;">
        Your favorite color is <?php echo ($color); ?>.
    </p>
    <p><a href="?">Hide result</a></p>
    <?php
    exit;
}
    ?>

</body>
</html>
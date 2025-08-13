
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "Current Server Time: " . date("Y-m-d H:i:s");
echo "<br>";

?>
    <form action="handle-form.php" method="POST">
        <label>Name:</label>
        <input type="text" name="username" required>
        <label>Favorite Color:</label>
        <input type="text" name="color" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


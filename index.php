<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "im101";

$name = $_POST['name'];

try {
    // create $conn and create a new connection similar mysql -u root -p
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // set your SQL Command
    if(isset($name)) {
        $variableNameSQL = "INSERT INTO user (Name) values ('$name')";

        // execute the command
        echo $conn->exec($variableNameSQL);
        echo "Record added successfully";
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <h1>Home</h1>

    <form action="" method="post">
        Name: <input type="text" name="name"><br>
        <input type="submit" value="SAVE">
    </form>

    <script>
        console.log("my first html form");
    </script>

</body>
</html>
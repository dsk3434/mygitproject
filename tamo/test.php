<?php
$servername = "localhost";
$username = "safeinfoalpha";
$password = "safeinfoalphap"



try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn-query("select * from mt001";)
    $result = $stm->fetchAll();
    
}
catch(PDOException $e) {
    echo "Connection failed:" .$e->getMessage();
}

?>

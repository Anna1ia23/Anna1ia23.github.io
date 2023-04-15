<?php
//This code is what will connect our website to the database on Microsoft Azure
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:mysqlserverfalc.database.windows.net,1433; Database = falc", "azureuser", "Lawrence123!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "azureuser", "pwd" => "Lawrence123!", "Database" => "falc", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:mysqlserverfalc.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


//Use the following code at the beginning of each file that will need to use php (take out /**/):

/*
<?php
    include_once'FALC/connectionScript.php';
?>
*/

?>
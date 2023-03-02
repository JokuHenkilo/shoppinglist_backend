<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$server_name=”localhost”;

$username=”root”;

$password=””;

$database_name=”database123″;

try
{
   $db = new PDO('mysql:host=127.0.0.1;dbname=shoppingList;charset=utf8','root', 'root');
   $sql = "select * from item";
   $query = $db->query($sql);
   $results = $query->fetchAll(PDO::FETCH_ASSOC);
   header('HTTP/1.1 200 OK');
   print json_encode($results);
}
catch (PDOException $pdoex)
{
   print "<p>Database connection failed!".$pdoex->getMessage();
}

?>

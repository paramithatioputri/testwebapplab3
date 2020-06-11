<?php
  $serverName = "simplewebtp047112.database.windows.net";
  
  $connectionOptions = array(
  "Database" => "simpleweb",
  "Uid" => "simpleweb",
  "PWD" => "Tp047112");
  
  //Establishes the connection
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  if (!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "DB: Connected!";

  $sql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?,?,?)";
  $params = array("Burger", "Bukit Jalil", "03-21101199");

  $stmt = sqlsrv_query($conn, $sql, $params);
  if($stmt === false){
    die(print_r(sqlsrv_errors(),true));
  }
?>

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
?>

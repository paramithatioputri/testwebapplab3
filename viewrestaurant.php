<?php
  $serverName = "simplewebtp000000.database.windows.net";
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
  $tsql= "SELECT * FROM [dbo].[restaurant]";
  $getResults= sqlsrv_query($conn, $tsql);
  if ($getResults == FALSE)
  {
?>

<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "phplearning";
   
   // Create a connection
   $conn = mysqli_connect($servername, $username, $password, $database);
   
   // Die if connection was not successful
   if (!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
   }
	
   $filename="database_backup.sql";

   $fp=fopen('php://output','w');

   $tables=array();

   $result=mysqli_query($conn,"SHOW TABLES");
   while($row=mysqli_fetch_row($result)){
    $tables[]=$row[0];
   }

   foreach($tables as $table){
       $result=mysqli_query($conn,"SHOW CREATE TABLE $table");
       $row=mysqli_fetch_row($result);
       $create_table=$row[1];
       fwrite($fp,$create_table . ";\n\n");
   
   $result=mysqli_query($conn,"SELECT * FROM $table");
   while($row=mysqli_fetch_row($result)){
    $values=array();
    foreach($row as $value){
        $values[]= "'" . mysqli_real_escape_string($conn,$value) . "'";

    }
    fwrite($fp, "INSERT INTO $table VALUES(". implode(",", $values).");\n");
   }
   fwrite($fp,"\n\n");

}
fclose($fp);
header("Content-type: text/sql");
header("Content-Disposition: attachment; filename=$filename");
exit;
?>
<?php
    //Enter your database connection details here.
    $host = 'localhost'; 
    // $db_name = 'forrest_jackson'; 
    $db_name = 'movetoki_wp776'; 
    $db_username = 'root'; 
    $db_password = ''; 

//    Enter your database connection details here, Live.
//    $host = 'localhost'; 
//    $db_name = 'forrest_jackson'; 
//    $db_username = 'yca_kd'; 
//    $db_password = '17_pass'; 

    try
    {
        $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
        $connection = mysql_connect("$host", "$db_username", "$db_password");
        // $db_msg = mysql_select_db("$db_name", $connection);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
?>

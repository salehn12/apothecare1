<?php

    $db_server = "localhost"; // server naam
    $db_user = "root"; // usernaam (default is de naam root)
    $db_pass = ""; // wachtwoord (default is er geen wachtwoord)
    $db_name = "Apothecare"; // naam database
    $conn = "";

//connectie met database
try{
    $conn = mysqli_connect($db_server,
                           $db_user,
                           $db_pass,
                           $db_name);
}
// -----------------------------------------------------------
// Berichten dat laat zien of de database wel of niet gekoppelt is
// Om connectie te testen haal de echo comando's uit de comment (select regel en dan: ctr + /)
// -----------------------------------------------------------
catch(mysqli_sql_exception){
    // echo"<p class='db_error'>Database '$db_name' could <span>not</span> connect!</p>";
}

if($conn){
    // echo"<p class='db_connected'>Database '$db_name' is connected!</p>";
} 
?>


<link rel="stylesheet" href="../assets/css/main.css?=v3">
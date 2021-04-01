<?php 



function connect(){
    global $connexion;
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'library';
    
    //On établit la connexion
    //$conn = mysqli_connect($servername, $username, $password);

    //mysqli_select_db("",'library');


    $connexion = new PDO( "mysql:host={$servername};dbname=".$database,$username,$password);
}
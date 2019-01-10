<?php

// it create connection and return the connection variable
function connection(){
     $servername = "localhost";
     $username = "trendsep_kalam";
     $password = "kalamdream2018";
     $dbname = "trendsep_sih";  
     $conn = mysqli_connect($servername, $username, $password, $dbname);

     //Check connection
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return 0; 
     }
     return $conn;

}

//it take connection and ddl command and return 1 for success and 0 for failure
function query_ddl($conn,$sql){
    if (mysqli_query($conn, $sql)) {
            return 1;
        } else {
            return 0;
        }
}


//it take connection and dml command and return result variable for result and 0 for failure
function query_dml($conn,$sql){
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
        /*
            use while loop to access its data like like this
             while($row = mysqli_fetch_assoc($result)) {
                                        echo "id: " . $row["id"]";
                }
        */
    }else {
        return 0;
    }
}



//it take reference like this close_connection($conn)
function close_connection(&$conn){
    mysqli_close($conn);
}


?>
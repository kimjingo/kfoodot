<?php
// Include config file
require_once "config.php";
 
 
    // Check input errors before inserting in database
        // Prepare an insert statement
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = "INSERT INTO users (username, password, ip_addr) VALUES (?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $ip);
            
            // Set parameters
            $param_username = $username;
            /*/
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            /*/
            $param_password = $password; // Creates a password hash
            //*/
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                // echo $stmt->error;
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

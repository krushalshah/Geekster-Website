<?php
$error = NULL;

if (isset($_POST['submit'])){

    //CONNECT TO THE DATABASE
    $mysqli = NEW MySQLi ('localhost','root','','dbms_project') or die ("Unable to connect to the server");

    //GET FORM DATA
    $u = $mysqli->real_escape_string($_POST['u']);
    $p = $mysqli->real_escape_string($_POST['p']);
    $p = md5($p);

    //Query the database 
    $resultSet = $mysqli->query("SELECT * FROM accounts WHERE username = '$u' AND password_ = '$p' LIMIT 1 " );

    if($resultSet-> num_rows != 0 ) {
        //Process Login
        $row = $resultSet -> fetch_assoc();
        $verified = $row['verified'];
        $email = $row['email'];
        $date = $row['createdate'];
        $date = strtotime($date);
        $date = date('M d Y' , $date);

        if($verified == 1){
            //Continue Processing
            
            // Go to Home page
        }else {
            $error = "This account has not been verified. An email was sent to $email on $date";

        }

    }else {
        //Invalid credentials 
        $error = "The username or password you entered is incorrect";
    }
}
?>

<html>
    <head>
        <title>Login</title>    
        <link rel="stylesheet" href="style.css" type = "text/css">
    </head>
    <body>
        
        <form method="POST" action="" >
        <h1> Welcome To Geekster </h1>
            <table border="0" align="center" cellpadding="5">
                <tr>
                    <td align="right">USERNAME:</td>
                    <td><input type="text" name="u" required/> </td>
                </tr>
                <tr>
                    <td align="right">PASSWORD:</td>
                    <td><input type="PASSWORD" name="p" required/> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="SUBMIT" class = "submit_button" value="Login" name = "submit" required> </td>
                </tr>
            </table>
        </form>
        <p class = "message" align = "center"> Not Registered? <a href="Registration.php"> Register </a> </p>

        <center>
            <?php
            echo $error ;
            //echo "Showing errors";

            ?>
        </center>
    </body>
</html> 
<?php
//Database connection
include 'dbconnect.php';

// initials
$error = "";
$success = "";
$sql = "";

// when submit the form
if (isset($_POST['submit']))
{
    // Receiving POST Values
    $user_name  = (isset($_POST["user_name"]) ? mysqli_escape_string($connect, trim(utf8_decode($_POST["user_name"]))) : "" );
    $contact    = (isset($_POST["contact"]) ? mysqli_escape_string($connect, trim(utf8_decode($_POST["contact"]))) : "" );
    $email      = (isset($_POST["email"]) ? mysqli_escape_string($connect, trim(utf8_decode($_POST["email"]))) : "" );

    // Insert the data into 'users' table
    $sql = "INSERT INTO users
                            (
                                  user_name
                                , contact
                                , email
                            ) VALUES(
                                  '$user_name'
                                , '$contact'
                                , '$email'
                            )";

    // echo $sql;
    $query = mysqli_query($connect, $sql);
    // $latestId = mysqli_insert_id($connect);
    
    if($query)
    {
        echo '<script type="text/javascript">
                alert("Record save successfully.");
                window.location.replace("displayRecords.php");
            </script>';
    }
    else {
        $error = 'Failed to save records!';
    }
}

?>
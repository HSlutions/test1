<?php
//Database connection
include 'dbconnect.php';

// get existing records for display

$sl = 1;

$sqlString  = "SELECT id, user_name, contact, email FROM users ORDER BY id DESC;";
$sqlQuery   = mysqli_query($connect, $sqlString) or die(mysqli_error($connect));
$rows = ( $sqlQuery ) ? mysqli_num_rows($sqlQuery) : 0;

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exercise 1 - Display Records</title>

    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/form-basic.css">
    <link rel="stylesheet" href="assets/table.css">

</head>


    <header>
        <h1>(INT 813) Object-Oriented Databases</h1>
    </header>


    <div class="main-content form-basic">

        <div class="form-title-row">
            <h1>Exercise 1 - Display</h1>
        </div>

        <table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

            <!-- Table Header -->
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>User name</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>
            </thead>
            <!-- Table Header -->

            <!-- Table Body -->
            <tbody>

<?php
            if ( $rows > 0)
            {
                while( $record = mysqli_fetch_array($sqlQuery) )
                {
?>
            
                <tr <?php echo ( $sl % 2 ) == 0 ? 'class="even"' : ''; ?> >
                    <td style="text-align: center;">
                        <?php echo $sl++; ?>
                    </td>
                    <td>
                        <a href="#"> <?php echo $record["user_name"]; ?> </a>
                    </td>
                    <td> <?php echo $record["contact"]; ?> </td>
                    <td><a href="#"> <?php echo $record["email"]; ?> </a></td>
                </tr>
<?php
                }
            }
            else {
?>
            
                <tr>
                    <td colspan="4"> No records found...</td>
                </tr>
<?php
            }
?>

            </tbody>
            <!-- Table Body -->

        </table>

        <br /><br />
        <a href="index.html" style="float: left;">Back to Entry form</a>

    </div>

</body>

</html>

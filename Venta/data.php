<meta charset="utf-8" />
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "u1631019_default";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

    $insert = "INSERT INTO contact_data (telnum, sertype, descr) VALUES ('{$_POST['telnum']}', '{$_POST['servicetype']}', '{$_POST['descr']}')";

    $insert_result = mysqli_query($conn, $insert);
    header("Location: venta-cleaning.ru");
    exit;

?>

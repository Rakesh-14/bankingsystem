  <?php

//connecting to database.. 
$severname = "localhost";
$username = "root";
$password = "";
$database = "spark";

$conn = mysqli_connect($severname, $username, $password, $database);


$sql = "SELECT * FROM `customers`";
$result=mysqli_query($conn, $sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="transferhistory.php">Transfer History</a></li>
        </ul>
    </div>

    <div class="heading">
        <strong>
            <p>Customers Details</p>
        </strong>
    </div>
    <div class="tab">
        <table class="table" border="1" cellspacing="14px" cellpadding="8px">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL-ID</th>
                <th>BALANCE</th>
            </tr>

            <tbody>
             <tr>
                         <?php 
                            $counter = 1;
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            	echo "
                            		<td>".$counter."</td>
                            		<td>".$row['Name']."</td>
                            		<td>".$row['email-id']."</td>
                            		<td>".$row['balance']."</td>
                            		
                            		</td></tr>
                            	";
                            	$counter += 1;
                            }
                            ?>
                    </tr>
                </tbody>
        </table>
    </div>

    <div class="footer">
        <p>© 2021 Rakesh Yadav. All Rights Reserved | Terms and Conditions, "GRIP April Internship"</p>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>

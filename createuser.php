<?php

                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $balance = $_POST['balance'];
                        
                    $severname = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "spark";
                    //connecting to database
                    $conn = mysqli_connect($severname, $username, $password, $database);
        
                    if(!$conn){
                        die("Sorry, Failed to connect due to some technical issue.");
                    }else
                        {
                            //submit data to the database. 
                        
        
        
                        //insert a sql query to be executed.. 
                        $sql = "INSERT INTO `customers` ( `Name`, `email-id`, `balance`) 
                        VALUES ( '$name', '$email', '$balance')";
                          $result = mysqli_query($conn, $sql);
                     
                        
                        //add a new row in roli database.... 
        
                     
        
                        }
                        }


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

    <?php 
            if(isset($result)){
                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> New user created successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }else { 
                  //   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  //   <strong>Sorry!</strong> New user not created , due to some technical issue.
                  //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  // </div>';
                }
             ?>

    <div class="heading">
        <strong>
            <p>Create New User Account</p>
        </strong>
    </div>
    <div class="useraccount">

        <form action="createuser.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label"> <strong>Name</strong> </label>
                <!-- <input type="te" class="form-control" id="name" aria-describedby="emailHelp"> -->
                <input type="text" name="name" id="name" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label"> <strong>Email-id</strong> </label>
                <input type="email" class="form-control" id="email" name="email">

            </div>
            <div class="mb-3">
                <label for="balance" class="form-label"> <strong>Balance</strong> </label>
                <input type="number" class="form-control" id="balance" name="balance">
            </div>

            <button type="submit" class="btn btn-primary">CREATE</button>
        </form>


    </div>


    <div class="footer">
        <p>© 2021 Rakesh Yadav. All Rights Reserved | Terms and Conditions, "GRIP April Internship"</p>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>

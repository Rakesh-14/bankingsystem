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
    <div  class = "menu">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="customers.php">Customers</a></li>
        <li><a href="transferhistory.php">Transfer History</a></li>
        </ul>
    </div>
    <marquee behavior="scroll">
        <h1>Welcome to Spark Banking System!!!</h1>
    </marquee>
    <div class="tab1">
        <table border="0">
            <tr>
                <th><img class="img1" src="profile.svg"></th>
                <th><img class="img1" src="money-transfer.svg"></th>
                <th><img class="img1" src="transaction.svg"></th>
            </tr>

            <tr>
                <th><a href="createuser.php" style="text-decoration: none;"><button class="b1" > Create User </button></a></th>
                <th><a href="transfermoney.php" style="text-decoration: none;"><button class="b1" > Transfer Money </button></a></th></a>
                <th><a href="transferhistory.php" style="text-decoration: none;"><button class="b1" > Transaction History </button></a></th>
            </tr>
        </table>
    </div>
    
        <div class = "footer">
        <p>© 2021 Rakesh Yadav. All Rights Reserved | Terms and Conditions, "GRIP April Internship"</p>
        </div>

         <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

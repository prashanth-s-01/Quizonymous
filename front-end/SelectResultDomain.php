<?php
    include '../config.php';
    session_start();
    if(!isset($_SESSION["user_id"]))
    {    
        echo  '<script> 
                    alert("Kindly login to view the Leaderboard!"); window.location.href="../index.html";
              </script>';  
    }

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'couldn\'t connect to server'.mysqli_error($con);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leader_Board</title>
        <meta charset="UTF-8">
        <meta name="description" content="Online quizzing site">
        <meta name="keywords" content="quiz,tech quiz"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./images/icon.jpg" type="image/icon">
        <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />      
    </head>
    <body class="container">
            <div class="jumbotron  ">
                <h1 class="text-center" >QUIZONYMOUS</h1>
                <h3 class="text-center"> Select a domain to view the Leaderboard !! </h3><br>
            </div>
            <br>
            <br>
        <div>
        <form action="../back-end/RerouteResult.php" method="POST">
            <div class="form-group">
                <label for="domain">Select Domain: </label>
                <select name="domain" class="selectpicker" required>
                    <option value="aptitude">Aptitude</option>
                    <option value="dbms">DBMS</option>
                    <option value="os">OS</option>
                    <option value="dsa">DSA</option>
                </select>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">View</button>
                <br>
                <br>
            </div> 
        </form>
        </div>
        <div>
            <h4  >Click<a href="../index.html">  here  </a> to go back to HOME page</h4><br><br>
        </div>
        <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script> 
        <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script> 
    </body>
</html>
<?php
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Zone</title>
    <link rel="stylesheet" href="developerZone.css">
</head>
<body>
<div id="nav">
    <ul>
    <li><a href="developerZone.php">iTweet</a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
    <li><a href="about.php">About</a></li>
    </ul>
</div>
<div id="forDeveloper">
    <h1>Click Here To DELETE All CHATS from DATABASE</h1>
    <p>Note That this section is only for developers outside user are not allowed in this section</p>
    <button onclick="showLogin()">DELETE ALL CHAT FROM DATABASE</button>
    <div id="login">
        <h3>Login to delete chat</h3>
        <form action="developerZone.php" method="post">
            Identity:<input type="text" name="identity"><br>
            Password:<input type="password" name="password"><br>
            <input type="submit">
        </form>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if($_POST['identity']=='0376' && $_POST['password']=='9759955376'){
            $servername="sql212.epizy.com";
               $username="epiz_26689209";
               $password="OtWT862ZIbDy";
               $database="epiz_26689209_details";
               $conn=mysqli_connect($servername,$username,$password,$database);
               $sql="truncate table `itweet`";
               mysqli_query($conn,$sql);
               echo "Deleted Successfully";
        }
        else{
            echo "Entered information is wrong";
        }
    }
    ?>
</div>
</div>
<script src="developerZone.js"></script>
</body>
</html>
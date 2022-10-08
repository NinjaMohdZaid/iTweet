<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
//connecting form to the database
$servername="sql212.epizy.com";
$username="epiz_26689209";
$password="OtWT862ZIbDy";
$database="epiz_26689209_details";
$name=$_POST['name'];
$topic=$_POST['topic'];
$description=$_POST['description'];
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `itweet` (`sno`, `name`, `topic`, `description`, `date`) VALUES (NULL, '$name', '$topic', '$description', current_timestamp())";
$result=mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTweet</title>
    <link rel="stylesheet" href="index.css">
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
<div id="ideaTweet">
<div class="welcome">
    <h1>WELCOME TO iTweet</h1>
    <p>Talk with the strangers and enjoy</p>
</div>
    <form action="index.php" method="POST">
        <b>Name</b>
     <br>
    <input type="text" name="name">
    <br>
     <b>Topic Title</b>
     <br>
    <input type="text" name="topic"><br>
     <b>Description</b>
     <br>
    <textarea name="description"cols="30" rows="10"></textarea><br>
    <button class="btn">Tweet</button>
    </form>
    <?php
    global $result;
    if($result)
    {
        echo "Tweet Successfull";
    }
    else
    {
        echo "Tweet By clicking tweet if already done this then click again";
    }
    ?>
</div>
<div id="readTweet">
<iframe name="iframe1" id="iframe1" src="prac.php" 
        frameborder="0" border="0" cellspacing="0"
        style="border-style: none;width: 100%; height: 100%"></iframe>
    </div>
</body>
</html>
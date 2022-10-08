<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="chat.css">
    <title>chat</title>
</head>
<body> 
<h2 id="readTweetsHeading">Read iTweets</h2> 
<div id="chatContainer">  
    <?php
    //chatting
    //connecting form to the database
     $servername="sql212.epizy.com";
     $username="epiz_26689209";
     $password="OtWT862ZIbDy";
     $database="epiz_26689209_details";
     $conn=mysqli_connect($servername,$username,$password,$database);
     $sql="SELECT * FROM `itweet`";
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
     //echo "$num";//print the number of rows 
     if($num>0)
     {
         while($row=mysqli_fetch_assoc($result))
         {
         $name=$row['name'];
         $topic=$row['topic'];
         $date=$row['date'];
         $description=$row['description'];
             echo "<chat><h2>$name</h2><br><b>$topic</b><br><i>$date</i><br><b>$description</b><br></chat>";
     }
    }
     else{
        echo "<h3>No Chat found</h3>";
     }
    ?>
</div>
</body>
</html>
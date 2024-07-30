<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $username=$_POST["U"];
   $password=$_POST["P"];
   $email=$_POST["E"];
   
   $servername = "localhost";
   $user = "root";
   $pass = "";
   $ema="".
   
   $dbname = "tech";
   $conn = new mysqli($servername,$user,$pass,$dbname);
   if($conn->connect_error)
   {
           die("connection failed:" . $conn->connect_error);
   }
   else
   {
    echo "Connection successful!!!<br>";
   }
   $stmt = $conn->prepare("INSERT INTO tech.info (username,password,email) VALUES (?,?,?)");
   $stmt->bind_param("sss",$username,$password,$email);
   if($stmt->execute()==TRUE){
    echo "Success!!!!!<br>";
    header("Location:superflora.html");
    exit();
   }else{
    echo "Insert failed:" . $stmt->error;
   }
   ?>
</body>
</html>
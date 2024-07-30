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
 $servername = "localhost";
 $user = "root";
 $pass = "";
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
 $stmt = $conn->prepare ("SELECT * FROM tech.info WHERE username=? and password=?");
 $stmt->bind_param("ss",$username,$password);
 if($stmt->execute()== TRUE){
  $res = $stmt->get_result();
  if($res->num_rows>0){
    echo "Successful<br>";
    header("Location:superflora.html");
    exit();
  }
  else{
    echo "No user found<br>";
   
    
    
   
  }
 } else
  {
    echo "Insert failed:" . $stmt->error;

  }


 ?>

</body>
</html>
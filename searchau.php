<?php
include_once('configau.php');
$k=$_POST["sea"];
$terms=explode(" ",$k);
$i=0;
$query="SELECT * FROM word WHERE";
foreach($terms as $each){
    $i++;
    if($i==1)
    $query.=" keyword LIKE '%$each%' ";
else
$query.="OR keyword LIKE '%$each%'";
}
$qry=mysqli_query($con,$query);

$result=mysqli_num_rows($qry);
if($result>0){
 while($row = $qry->fetch_assoc()){
    $key = $row['keyword'];
    $des=$row['description'];
    echo "<h1>$key</h1>";
    echo "<p>$des</p>";
 }
}
else{
    echo "No results found ".$_POST['sea'];
}
?>
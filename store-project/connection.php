 
<?php

include('index.php'); 

if(isset($_POST["sub"]))
{
  $conn=mysqli_connect("localhost","root","","store");
  $Depname=$_POST["Deptname"];
  $item=$_POST["item"];
  $quan=$_POST["quantity"];
  $Add=$_POST["Address"];
  $sql="insert into items(department,item,quartity,address) 
  values('$Depname','$item',$quan,'$Add')";

if (mysqli_query($conn,$sql))
{

  echo '<script type="text/javascript">';
  echo ' alert("booking successful")'; 
  echo '</script>'; 

}
else{
  echo "not ok";
  echo mysqli_error($conn);
}
}

?>

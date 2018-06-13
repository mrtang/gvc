<?php
$con=mysqli_connect("localhost","gvc_data","abyss.z94@1A","gvc_launcher");
$username = "";
$password = "";
if(isset($_GET['UserName']) && isset($_GET['password'])) {
    $username = mysqli_real_escape_string($con, $_GET['UserName']);
    $password = mysqli_real_escape_string($con, $_GET['Password']);
}
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM accounts WHERE UserName='".$username."' AND Password='".$password."'";
$result=mysqli_query($con,$sql);
echo mysqli_num_rows($result);

mysqli_close($con);
?>
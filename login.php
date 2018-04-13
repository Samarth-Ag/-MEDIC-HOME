<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo 'Not Connected To sever';

}
if(!mysqli_select_db($con,'website'))
{
  echo 'database not selected';

}
if(isset($_POST['email']) and isset($_POST['Password'])){
$email=$_POST['email'];
$password=$_POST['Password'];
$sql="SELECT * FROM users";
$f=0;
$records=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($records))
// while ($row = mysql_fetch_array($result) or die mysql_error())
{
 if($row['password']==$password&&$row['address']==$email)
  {
    $f=1;
    break;
  }

}
if($f==1)
{

  header("refresh:0;url=index2.html");

}
else {
    echo "enter correct details";
        header("refresh:2;url=index.html");

}
}
?>

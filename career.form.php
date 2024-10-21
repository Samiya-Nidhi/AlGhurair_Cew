<?php


$host="localhost";
$user="root";
$pass="";
$db="career";

$conn=new mysqli($host,$user,$pass,$db);
// if($conn->connect_error){
//     echo "Failed to connect DB".$conn->connect_error;
// }
// else {
//     echo "connected";
// }


//start
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$position = $_POST['position'];
$country = $_POST['country'];
$house_and_street = $_POST['house_and_street'];
$house_type = $_POST['house_type'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$marital_status = $_POST['marital_status'];
$messageA = $_POST['messageA'];

$messageB = $_POST['messageB'];
$messageC = $_POST['messageC'];
$messageD = $_POST['messageD'];
$messageE = $_POST['messageE'];
$messageF = $_POST['messageF'];
$messageG = $_POST['messageG'];
$messageH = $_POST['messageH'];
$messageI = $_POST['messageI'];
$messageJ = $_POST['messageJ'];
$messageK = $_POST['messageK'];
$file = $_POST['file'];

$sql = "INSERT INTO `users`( `first_name`, `last_name`, `position`, `country`, `house_and_street`, `house_type`, `birthdate`, `phone`, `email`, `marital_status`,
 `messageA`, `messageB`, `messageC`, `messageD`, `messageE`, `messageF`, `messageG`, `messageH`, `messageI`, `messageJ`, `messageK`, `file`) VALUES ('$first_name','$last_name',
 '$position','$country','$house_and_street','$house_type','$birthdate','$phone','$email','$marital_status','$messageA','$messageB','$messageC','$messageD','$messageE','$messageF','$messageG','$messageH',
 '$messageI','$messageJ','$messageK','$file')";


$result = mysqli_query($conn , $sql);

if($result)
{
    echo "data submitted";
}
else 
{
    echo "query failed!";
}

?>


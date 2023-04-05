<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'job_portel';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:" . $connect_error);
}
echo "";

if(isset($_POST['user_submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

    $sql ="INSERT INTO `users`(`name`, `email`, `password`,`phone_no`) VALUES ('".$name."','".$email."','".$password."','".$number."')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
        header("location:Login.php");
    }else{
        echo "Error:could not able to execute $sql." . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT id FROM users WHERE email='".$email."' AND password='".$password."'";
    $Result=mysqli_query($conn,$query);

    //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($Result)==1){
        header("location:index.php");
    }
    else{
        echo "emailid or password is incorrect.";
    }
}

if(isset($_POST['Post_job'])){
$cname = $_POST['cname'];
$pos = $_POST['pos'];
$Jdesc = $_POST['Jdesc']; 
$skills = $_POST['skills'];
$CTC = $_POST['CTC'];

$sql= "INSERT INTO `post_job`(`Company_Name`, `Position`, `Jdesc`, `Skills`, `CTC`) VALUES ('".$cname."','1$pos','".$Jdsec."','".$skills."','".$CTC."')";
    if(mysqli_query($conn, $sql)){
        header("location:index.php");
    }
    else{
        echo "There is some error.....!";
    }

}

if (isset($_POST['submit_job'])) {
    $name = $_POST['name'];
    $qual = $_POST['qual'];
    $year = $_POST['year'];
    $job_id = $_POST['job_id'];

    $sql = "INSERT INTO`candidate`(`candidate_name`,`qual`,`year`,`job_id`) VALUES ('$name','$qual','$year','$job_id')";
   if( mysqli_query($conn,$sql)){
        header("location:career1.php");
   }
   else{
    echo "There is some error.....!";
}
}
?>
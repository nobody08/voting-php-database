<?php
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];


if($password!=$cpassword){
    echo '<script>
    alert("password do nort match");
     window.location="../partials/registration.php";
     </script>';
}

else{
    move_uploaded_file($tmp_name,"../upload/$image");
    $sql="insert  into `userdata` (username,mobile,password,photo,standard,
    status,votes) value ('$username','$mobile','$password','$image','$std'
    ,0,0)";

    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Regstration Successfull");
        window.location="../";
        </script>';
    }
}



?>
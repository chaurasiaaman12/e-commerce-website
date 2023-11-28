<?php
include("connection.php");
if(isset($_post['submit'])){
    $usnername = $_POST['user'];
    $oassword = $_POST['pass'];

    $sql = "select * from login where username = '$username' and password ='$password'";
    $result = mysqi_query($conn, $sql);
    $row = mysqli_fetch_array($reult,mysql_assoc);
    $count = mysqli_num__rows($result);
    if($count==1){
        header("location:index1.html");
    }
    else{
        echo '<script>
        window.location.href = "index.php";
        alert("login failed. invalid username or password !!!")
        </script>';
    }
}

?>
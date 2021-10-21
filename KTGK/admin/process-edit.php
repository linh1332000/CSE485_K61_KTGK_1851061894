<?php
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $dateofbirth = $_POST['dateofbirth'];
     $gender = $_POST['gender'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $height = $_POST['height'];
     $wei_ght = $_POST['weight'];
     $blood_type = $_POST['bold_type'];
     $id = $_POST['patientid'];

    include '../config.php';
    // Bước 02:
    $sql = "UPDATE benh_nhan SET firstname = '$firstname',lastname='$lastname',dateofbirth ='$dateofbirth', gender='$gender', mobile='$mobile',email ='$email',height='$height',weight='$wei_ght',blood_type='$blood_type' where patientid='$id'";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>

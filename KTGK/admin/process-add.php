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
    include '../config.php';
    echo $blood_type;

    // Bước 02:
    $sql = "INSERT INTO PATIENT (firstname, lastname, dateofbirth, gender,mobile, email,height,weight,id_blood_type)
    VALUES ('$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$wei_ght','AB')";

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

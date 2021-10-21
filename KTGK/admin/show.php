<?php
    include '../header.php';
    include '../config.php';
    $id = $_GET['id'];
    settype($id,"int");
    $sql = "SELECT e.patientid,e.firstname,e.lastname,e.dateofbirth,e.gender,e.mobile,e.email,e.height,e.weight,e.created_on,e.modified_on ,o.bold_type FROM patient e, nhom_mau     o
    WHERE e.id_blood_type = o.id_blood_type and patientid = '$id'" ;
    $result = mysqli_query($conn,$sql);

?>

    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã_BN</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ đệm </th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày lập sổ</th>
                    <th scope="col">Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['patientid']; ?> </th>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['dateofbirth']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['height']; ?></td>
                                <td><?php echo $row['weight']; ?></td>
                                <td><?php echo $row['bold_type']; ?></td>
                                <td><?php echo $row['created_on']; ?></td>
                                <td><?php echo $row['modified_on']; ?></td>
                            </tr>
                <?php
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    
<?php
    include '../footer.php';
?>
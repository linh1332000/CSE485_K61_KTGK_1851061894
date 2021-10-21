<?php
    include '../header.php';
?>

    <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->
        <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm Bệnh nhân</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ đệm </th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Xem chi tiết</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include '../config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT * from patient";
                   
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
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
                                <td><a href="show.php?id=<?php echo $row['patientid']; ?>"><i class="fas fa-user-edit"></i></a></td>
                                <td><a href="edit.php?id=<?php echo $row['patientid']; ?>"><i class="fas fa-user-edit"></i></a></td>
                                <td><a href="delete.php?id=<?php echo $row['patientid']; ?>"><i class="fas fa-user-times"></i></a></td>
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
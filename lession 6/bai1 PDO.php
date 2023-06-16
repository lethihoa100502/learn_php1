<?php
$servername = "localhost";  
$username = "root";       
$password = "";             
$database = "quanlykhachhang"; 

    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Tạo bảng "customers"

    $stmt =$conn ->prepare('CREATE TABLE IF NOT EXiSTS customers
    (
        id  int(11) NOT NULL ,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        phone varchar(255) NOT NULL,
        PRIMARY KEY (id)
    )');
    $result = $stmt ->execute();
    if (!$result){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '1.Thành công:  ' ;
    };

//thêm mới 
$stmt  =$conn ->prepare('INSERT INTO customers (id, name, email, phone) values (?,?,?,?)');
$data1 = array (1, 'Lê Thị Hòa 1', 'hoa1@gmail.com', '1111111111');
$data2 = array (2, 'Lê Thị Hòa 2', 'hoa2@gmail.com', '2222222222');
$data3 = array (3, 'Lê Thị Hòa 3', 'hoa3@gmail.com', '3333333333');
$data4 = array (4, 'Lê Thị Hòa 4', 'hoa4@gmail.com', '4444444444');

$result1 = $stmt ->execute($data1);
    if (!$result1){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '2.Thành công:  ' ;
    }
$result2 = $stmt ->execute($data2);
    if (!$result2){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '3.Thành công:  ' ;
    }
$result3 = $stmt ->execute($data3);
    if (!$result3){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '4.Thành công:  ' ;
    }
$result4 = $stmt ->execute($data4);
    if (!$result4){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '5.Thành công:  ' ;
    }
//update
$stmt = $conn->prepare("UPDATE customers SET name = :name WHERE id = :id ");
$id = 1;
$name = "Lê Thị Hòa 01";
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$result = $stmt->execute();
if (!$result){
    die ('Thất bại: '. $stmt ->errorinfo());
} else {
    echo '6.Thành công:  ' ;
};
//delete 
$stmt = $conn->prepare("DELETE FROM customers WHERE id = :id");
$id = 5;
$stmt->bindParam(':id', $id);
$result = $stmt->execute();
if (!$result){
    die ('Thất bại: '. $stmt ->errorinfo());
} else {
    echo '7.Thành công:  ' ;
};

// Đóng kết nối
$conn = null;
?>
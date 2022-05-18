<?php
    require_once "connection.php";
    $arr_data = array(
        $_POST['name'],
        $_POST['dated'],
        $_POST['name_01'],
        $_POST['price']
    );
    $stmt = $conn->prepare("insert into product(name,dated,name_01,price) values (?,?,?,?)");
    $stmt->execute($arr_data);
    if($stmt):
        echo json_encode(array('status'=>'success'));
    else:
        echo json_encode(array('status'=>'False'));
    endif;
?>
<?php
    require_once "connection.php";

    try {
        $data = array(
            $_POST['name'],$_POST['dates'],$_POST['name_01'],$_POST['price']
        );
        print_r($data);
        if(isset($_POST['insert'])):
            $stmt = $conn->prepare('insert into product(name,dated,name_01,price) values (?,?,?,?)');
            $stmt->execute($data);
            header("Location: success.html");
        else:
            echo "Insert False.";
        endif;

    } catch (PDOException $err) {
    
    }
?>
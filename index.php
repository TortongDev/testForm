<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="wrapper-page">
        <?php 
        require_once "connection.php";
            $stmt = $conn->query("select * from product");
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_OBJ)
        ?>

        <table width="40%">
            <tr>
                <th>name</th>
                <th>dated</th>
                <th>name_01</th>
                <th>price</th>
            </tr>
            
            <tr>
                <td><?php echo $result->name; ?></td>
                <td><?php echo $result->dated; ?></td>
                <td><?php echo $result->name_01; ?></td>
                <td><?php echo $result->price; ?></td>
            </tr>
           
        </table>
        <section class="wrapper-form">
            <form action="" method="post">
                <div class="form-grp">
                    <label for="name">Name</label>                    
                    <input type="text" name="name">
                </div>
                <div class="form-grp">
                    <label for="dated">Name</label>                    
                    <input type="text" name="dated">
                </div>
                <div class="form-grp">
                    <label for="name_01">Name</label>                    
                    <input type="text" name="name_01">
                </div>
                <div class="form-grp">
                    <label for="price">Name</label>                    
                    <input type="text" name="price">
                </div>
                <div class="form-grp">
                    <label for=""></label>
                    <button type="submit" name="insert">save</button>
                </div>
                
            </form>
        </section>
    </div>
</body>
<script src="js/script.js"></script>
</html>
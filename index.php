<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Input</title>
</head>
<body>
    <div class="wrapper">
        <section class="wrapper-form">
            <form action="insert.php" method="post">
                <div class="form-grp">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-input">
                </div>
                <div class="form-grp">
                    <label for="dates">Date</label>
                    <input type="date" name="dates" class="form-input">
                </div>
                <div class="form-grp">
                    <label for="name_01">Name Save</label>
                    <input type="text" name="name_01" class="form-input">
                </div>
                <div class="form-grp">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-input">
                </div>
                <div class="form-btn">
                    <button type="submit" name="insert">Save</button>
                </div>
            </form>
        </section>
    </div>
</body>
<script src="js/script.js"></script>
</html>
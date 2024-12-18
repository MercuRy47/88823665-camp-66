<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>ตารางสูตรคูณ</h1>
        <form action="" method="post">
            <input type="number" name="num1" id="num1" placeholder="แม่สูตรคูณ">
            <input type="number" name="num2" id="num2" placeholder="ตัวคูณ">
            <button type="submit" name="update" class="btn btn-success">Calculate</button>
        </form>
    <?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (isset($_POST['update'])) {
            for ($i=1; $i <= $num2; $i++) { 
                $result =  $num1*$i;
                echo "<h4>$num1 x $i = $result</h4>";
            }
        }
    ?>
    <hr>
    </div>
</body>
</html>
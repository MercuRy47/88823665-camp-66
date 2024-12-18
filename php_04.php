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
        <h1>คู่-คี่</h1>
        <form action="" method="post">
            <input type="number" name="start" id="" placeholder="เลขเริ่มต้น">
            <input type="number" name="end" id="" placeholder="เลขสุดท้าย">
            <button type="submit" name="update2" class="btn btn-primary">Calculate</button>
        </form>
        <?php
        
            $start = $_POST['start'];
            $end = $_POST['end'];

            if (isset($_POST['update2'])){
                for ($i=$start; $i <= $end; $i++) { 
                    if($i % 2 == 0){
                        echo "<h4 style='text-decoration: underline; color: green;'>$i เลขคู่</h4>";
                    }else {
                        echo "<h4>$i เลขคี่</h4>";
                    }
                }
            }

        ?>
        <hr>
    </div>
</body>
</html>
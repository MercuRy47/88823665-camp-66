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
        <?php

            $num1 = 3;
            $num2 = 12;

            for ($i=1; $i <= $num2; $i++) { 
                $result =  $num1*$i;
                echo "<h4>$num1 x $i = $result</h4>";
            }

        ?>
        <hr>
    </div>
</body>
</html>
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
        
            $start = 1;
            $end = 100;

            for ($i=$start; $i <= $end; $i++) { 
                if($i % 2 == 0){
                    echo "<h4 style='text-decoration: underline; color: green;'>$i เลขคู่</h4>";
                }else {
                    echo "<h4>$i เลขคี่</h4>";
                }
            }

            ?>
        <hr>
    </div>
</body>
</html>
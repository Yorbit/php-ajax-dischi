<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles//style.css">
    <title>PHP Ajax Dischi V1</title>
</head>
<body>
    <header>
        <i class="fa-brands fa-spotify"></i>
    </header>
    <?php include __DIR__ .'/./data/data.php'; ?>
    <main>
        <div class="container">
            <?php foreach ($discs as $key => $disc) { ?>
                <div class="card">
                    <div class="img">
                        <img src="<?php echo $disc['poster'] ?>" alt="">
                    </div>
                    <h3><?php echo $disc['title'] ?></h3>
                    <p><?php echo $disc['author'] ?></p>
                    <p><?php echo $disc['genre'] ?></p>
                    <p><?php echo $disc['year'] ?></p>
                </div>
            <?php }?>
        </div>
    </main>
</body>
</html>
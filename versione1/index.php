<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
</head>
<body>

    <?php
    include __DIR__ . '/../db/dischi.php';
    ?>

    <main>
        <div class="container">
            <ul>
                <?php
                    foreach($dischi as $disco) {
                        ?>
                            <img src=" <?= $disco['poster'] ?> " alt="">
                            <li> 
                                <p> <?= $disco['title'] ?> </p>
                                <p> <?= $disco['author'] ?> </p>
                                <p> <?= $disco['genre'] ?> </p>
                                <p> <?= $disco['year'] ?> </p>
                            </li>
                        <?php
                    }
                ?>
            </ul>

        </div>
        
    </main>
    
</body>
</html>
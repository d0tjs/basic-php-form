<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!--     <?php
                $name = $_POST['name'] ?? null;
                $age = $_POST['age'] ?? null;

                ?> -->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>

    </form>


    <div>
        <!--         <?php
                        if (!empty($name)) :
                        ?>
            <h1>Your name is: <?php echo $name; ?></h1>
        <?php endif ?>
        <?php
        if (!empty($age)) :
        ?>
            <h1>Your age is: <?php echo $age; ?></h1>
        <?php endif ?> -->


        <?php
        $submit = $_POST['submit'] ?? null;
        if (!empty($submit)) :
        ?>
            <h1>Your name is: <?php echo $_POST['name']; ?></h1>
            <h1>Your age is: <?php echo $_POST['age']; ?></h1>
        <?php endif ?>
    </div>
</body>

</html>
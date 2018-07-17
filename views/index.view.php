<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php-Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->

</head>

<body>

    <nav>
        <ul>
            <li>
                <a href="/about.php">About Us</a>
            </li>
            <li>
                <a href="/contact.php">Contact Us</a>
            </li>
        </ul>
    </nav>

    <h1>My Task</h1>
    <ul>

        <?php foreach ($tasks as $task) : ?>

        <li>
            <?php if ($task->completed) : ?>
            <strike>
                <?= $task->description; ?>
            </strike>
            <?php else : ?>

            <?= $task->description; ?>

                <?php endif; ?>
        </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>
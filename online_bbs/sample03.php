<?php
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    echo "<pre>";
    var_dump($_REQUEST);
    echo "</pre>";

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title>フォーム</title>
</head>
<body>
    <?php
        if (isset($_GET['name']) && strlen($_GET['name']) > 0):
    ?>
    <p>
        <?php echo htmlspecialchars($_GET['name']); ?>
        <?php // echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); ?>
        さんこんにちは！！
    </p>
    <?php endif; ?>

    <form action="sample03.php" method="GET">
        <p>
            名前を入力して下さい:
            <input type="text" name="name" />
            <input type="submit" value="送信" />
        </p>
    </form>
</body>
</html>

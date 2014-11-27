<html>
<head>
    <title>ひとこと掲示板</title>
</head>
<body>
    <h1>ひとこと掲示板</h1>

    <form action="bbs.php" method="POST">
        <?php if (count($errors)): ?>
            <ul class="error_list">
                <?php foreach($errors as $error): ?>
                <li>
                    <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        名前: <input type="text" name="name" /><br />
        ひとこと: <input type="text" name="comment" size='60' /><br />
        <input type="submit" name="submit" value="送信" />
    </form>

    <?php if(count($posts) > 0): ?>
        <ul>
            <?php foreach($posts as $post): ?>
            <li>
                <?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo htmlspecialchars($post['comment'], ENT_QUOTES, 'UTF-8'); ?>
                - <?php echo htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8'); ?>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php
        //取得結果を解放して接続を閉じる
        mysql_free_result($result);
        mysql_close($link);
    ?>
</body>
</html>

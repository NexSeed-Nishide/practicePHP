<?php

    // データベースに接続
    $link = mysql_connect('localhost', 'nishide', 'daisuke');
    if (!$link) {
        die('データベースに接続できません:'. mysql_error());
    }

    // データベースを選択する
    mysql_select_db('online_bbs', $link);

    // エラーが起きた時にエラー内容を格納する配列を初期化
    $errors = array();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // 名前の入力内容をチェック
        $name = null;
        if (!isset($_POST['name']) || !strlen($_POST['name'])) {    // 名前のパラメータがなかった場合
            $errors['name'] = '名前を入力して下さい';
        } else if (strlen($_POST['name']) > 40) {                   // 名前が40文字以上で長過ぎた場合
            $errors['name'] = '名前は40文字居ないで入力して下さい。';
        } else {                                                    // 名前の入力内容が正常だった場合
            $name = $_POST['name'];
        }

        // コメントの入力内容をチェック
        $comment = null;
        if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {  // コメントのパラメータがなかった場合
            $errors['comment'] = 'ひとことを入力して下さい';
        } else if (strlen($_POST['comment']) > 200) {                   // コメントが200文字以上で長すぎだった場合
            $errors['comment'] = 'ひとことは200文字以内で入力して下さい';
        } else {                                                        // コメントの入力内容が正常だった場合
            $comment = $_POST['comment'];
        }

        // エラーがなければデータベースへ保存
        if (count($errors) === 0) {
            // SQL文を作成
            $insertName = mysql_real_escape_string($name);
            $insertComment = mysql_real_escape_string($comment);
            $insertDate = date('Y-m-d H:i:s');
            $sql = "INSERT INTO
                        `post`(`name`, `comment`, `created_at`)
                    VALUES
                        ('$insertName', '$insertComment', '$insertDate');
                    ";

            // 保存処理を実行
            $result = mysql_query($sql, $link);
        }
    }
?>
<html>
<head>
    <title>ひとこと掲示板</title>
</head>
<body>
    <h1>ひとこと掲示板</h1>

    <form action="bbs.php" method="POST">
        名前: <input type="text" name="name" /><br />
        ひとこと: <input type="text" name="comment" size='60' /><br />
        <input type="submit" name="submit" value="送信" />
    </form>
</body>
</html>
<?php

    /**
     * データベースとコネクションを作成
     */
    function connectDatabase() {
        $link = mysql_connect("localhost", "nishide", "daisuke");
        mysql_query('SET NAMES utf8', $link);
        mysql_select_db("vegetable", $link);

        return $link;
    }

    /**
     * カテゴリのデータを全て取得
     */
    function getCategories() {
        $link = connectDatabase();

        $query = "SELECT * FROM categories";
        $result = mysql_query($query, $link);

        $rows = mysql_num_rows($result);
        $categories = array();
        for ($i = 0; $i < $rows; $i++) {
            $categories[] = mysql_fetch_assoc($result);
        }

        return $categories;
    }

    /**
     * 特定のカテゴリのアイテム一覧を取得する
     */
    function getItemsWithSpecificCatetory($categoryId) {
        $link = connectDatabase();
        $query = "SELECT
                    categories.id AS category_id,
                    items.id AS item_id,
                    categories.name AS category_name,
                    items.name AS item_name
                FROM
                    categories, items
                WHERE
                    categories.id = items.category_id AND
                    categories.id = $categoryId";
        $result = mysql_query($query, $link);

        $rows = mysql_num_rows($result);
        $datas = array();
        for ($i = 0; $i < $rows; $i++) {
            $datas[] = mysql_fetch_assoc($result);
        }

        return $datas;
    }

    $categories = getCategories();
    $items = getItems();

?>
<html>
<head>
    <meta charset="UTF-8" />
    <title>野菜と果物一覧</title>
</head>
<body>
    <h1>野菜一覧だよ</h1>
    <div>
        <ul>
        <?php
            foreach ($categories as $category) {
                $items = getItemsWithSpecificCatetory($category['id']);

                echo "<div>";
                echo "<h2>".$category['name']."</h2>";
                echo "<ul>";
                foreach ($items as $item) {
                    echo "<li>";
                    echo $item['item_name'];
                    echo "</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
        ?>
        </ul>
    </div>
</body>
</html>

<?php

	// データベースをコネクションをはる
	$link = mysql_connect("localhost", "root", "pegasus44");

	// データベースを選択する
	$db = mysql_select_db("sample_database2", $link);

	// SQL文を作成して$queryという変数に保持
	$query = "INSERT INTO
					users(name, address, tel)
				VALUES
					('kunisada', 'Cebu', '000-0000-0000')";

	// $queryに記述したSQL文を実行
	$result = mysql_query($query, $link);

echo "<pre>";
var_dump($result);
echo "</pre>";

?>
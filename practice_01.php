<?php

	// 変数とは何か
	$hello = "Hello World!!";
	echo $hello;
	echo "<br />";

	$evening = "Good Evening!!";
	echo $evening;
	echo "<br />";

//------------------------------------------------------------------

/* データって何でしょう？ */
	// 整数(Int)
	$number = 1;
	var_dump($number);
	echo "<br />";

	// 文字列型（上記の$helloを利用)
	var_dump($hello);
	echo "<br />";

	// 小数（Float型)
	$float = 1.25;
	var_dump($float);
	echo "<br />";

	// 論理値(true/false)
	$bool = false;
	var_dump($bool);
	echo "<br />";

	// 配列
	$array = array(1, 2, 3, 4, 5);
	var_dump($array);
	echo "<br />";

	var_dump($array[1]);
	echo "<br />";

	var_dump($array[3]);
	echo "<br />";

	// 連想配列
	$array2 = array("first" => 1, "second" => 2, "third" => 3);
	var_dump($array2);
	echo "<br />";

	var_dump($array2["first"]);
	echo "<br />";

	var_dump($array2["third"]);
	echo "<br />";

	// NULL型
	$null = null;
	var_dump($null);
	echo "<br />";

	// PHP.manualのデータ型のところとかを、四苦八苦しながら読んでみると良いかも(3週目くらいに。。。)
	// http://php.net/manual/ja/language.types.php

//------------------------------------------------------------------

/* 制御構文(条件分岐(if文), 繰り返し処理(for文, while文, foreach文)) */

	// if文についての紹介(if, else if, else)
	$name = "katoakira";
	if ($name == "nishidedaisuke") {
		echo $name;
		echo "<br />";
	} else if ($name == "katoakira") {
		echo $name;
		echo "<br />";
	} else {
		echo "違いました。";
		echo "<br />";
	}

	// for文(繰り返し処理 ---- 一番使うやつ)
	$array = array("hoge", "fuga", "moge", "foo", "bar");
	var_dump($array);
	echo "<br />";
	for ($i = 0; $i < 5; $i++) {
		echo $i;
		echo "<br />";
		echo $array[$i];
		echo "<br />";
	}

	// while文(繰り返し処理 ----- あんまり使わないやつ)
	$j = 0;
	while(true) {
		if ($j >= 5) {
			break;
		}

		echo "hogehoge";
		echo "<br />";
		$j++;
	}

	$j = 0;
	while($j < 5) {
		echo "hogehoge";
		echo "<br />";
		$j++;
	}

	// foreach文の紹介(for文で繰り返すデータの中身を変数に入れて使える)
	$ary = array("hoge", "fuga", "moge", 1);
	foreach($ary as $str) {
		echo $str;
		echo "<br />";
	}

	// switch文(if/elseif/elseifが続くような条件分岐の時に見やすい)
	$ary = array("hoge", "fuga", "moge");
	foreach($ary as $str) {
		switch ($str) {
			case "hoge":
				echo "hogeなんだぜ！";
				echo "<br />";
				break;
			case "fuga":
				echo "fugaなんだぜ！";
				echo "<br />";
				break;
		}
	}


	// シングルクォーテーションとダブルクォーテーションの違い
	$hoge = "ほげほげ";
	$fuga = "ふがふが";
	echo $hoge;
	echo "<br />";

	echo $fuga;
	echo "<br />";

	echo "$hoge";
	echo "<br />";

	echo '$hoge';
	echo '<br />';

?>
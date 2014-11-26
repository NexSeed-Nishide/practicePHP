<html>
<head>
    <meta charset="UTF-8" />
    <title>あいさつ</title>
</head>
    <?php
        $hour = date('H');

        if (5 <= $hour && $hour < 10) {
            echo "<p>";
            echo "おはようございます";
            echo "</p>";
        } else if (10 <= $hour && $hour < 18) {
            echo "<p>";
            echo "こんにちは。";
            echo "</p>";
        } else {
            echo "<p>";
            echo "こんばんは。";
            echo "</p>";
        }
    ?>
    <p><?php echo $hour; ?>時です。</p>
</html>

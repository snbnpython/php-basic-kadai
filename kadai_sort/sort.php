<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

        echo '昇順にソートします。<br>';
        sort_2way($nums, 'TRUE');

        echo '降順にソートします。<br>';
        sort_2way($nums, 'FALSE');
        ?>

        <?php
        function sort_2way($array, $order)
        {
            if ($order == 'TRUE') {
                sort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            } else {
                rsort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }
        }
        ?>
    </p>
</body>

</html>
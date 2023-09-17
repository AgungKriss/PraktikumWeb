<html>
<head>
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        for($i = 0; $i < 10; $i++){
            for($j = 0; $j <= 10; $j++){
                if($j == $i || $j < $i){
                    echo "_";
                } else if (($j - $i) % 2 == 0){
                    echo "<span class = 'red'>*</span>";
                } else {
                    echo "*";
                }
            }
            echo "<br/>";
        }
    ?>
</body>
</html>
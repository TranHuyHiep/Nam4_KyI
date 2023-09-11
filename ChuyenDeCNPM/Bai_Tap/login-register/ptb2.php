<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            if($a == 0 && $b == 0) {
                echo "Phuong trinh vo so nghiem";
            else if($a == 0 && $b != 0) {
                echo "x = " + (-$b)/$a;
            } else {

                $denta = $b*$b - 4*$a*$c;
                if($denta < 0) {
                    echo "Phuong trinh vo nghiem";
                } else if($denta == 0) {
                    echo "Phuong trinh co nghiem kep x = " . (-$c)/(2 * $a);
                } else {
                    echo "Phuong trinh co 2 nghiem phan biet x1 = " . (-$b - sqrt($denta))/(2 * $a) . " x2 = " . (-$b + sqrt($denta))/(2 * $a);
                }
                }
            }
        }
    ?>

    <form action="ptb2.php" method="POST">
        <input type="number" name="a"> x^2 + <input type="number" name="b"> x + <input type="number" name="c"> = 0
        <input type="submit" value="Giải">
    </form>
</body>
</html>
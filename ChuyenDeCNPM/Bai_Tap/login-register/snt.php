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
        $num = $_POST["num"];
    
        if ($num != "") {
            

            function snt($a) {
                $ketqua = $a . " Day la so nguyen to";
                for($i=2; $i < $a; $i++) {
                    if($a % $i == 0) {
                        echo "so chia het: " .$i. "<br>";
                        $ketqua = $a . " Khong la so nguyen to";
                    }
                }
                echo $ketqua;
            }
            snt($num);
        }
    }
    ?>

    <h1>Xây dựng hàm để kiểm tra một số có là số nguyên tố hay không</h1>
    <form action="snt.php" method="POST">
        <input type="number" name="num">
        <input type="submit" value="Click">
    </form>
</body>
</html>
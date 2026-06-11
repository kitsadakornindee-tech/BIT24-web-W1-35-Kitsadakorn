<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    echo "<h1 style='color:orange'>งานที่ 1 กฤษฎากร อินทร์ดี BIT.2/4 เลขที่ 36</h1>"; 
?>

<a href="while.php">White Loop</a>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){

            $num = $_GET["num"];

            echo "สูตรคูณแม่ " . $num . "<br>";
            
            //. เริ้มต้น       สิ้นสุด   เพิ่มทีละ 1
            for($i = 1;  $i <= 12; $i++){
                echo $num . " x " . $i . " = " . $num * $i . "<br>";

            }

        }
    ?>

</body>
</html>
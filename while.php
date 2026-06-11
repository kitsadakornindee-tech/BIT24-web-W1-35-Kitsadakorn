<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ While Loop</title>
</head>
<body  style="text-align: center; background-image: url('https://yt3.googleusercontent.com/Yh_OwS9ULso6ct27p691VXNA727Egt45wLuL_G4W7bKA_IERsmw1RSYFx7TIFnviGbAB1Qym_A=s900-c-k-c0x00ffffff-no-rj'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; background-position: center;">
    
    <?php
        echo "<h1 style='color:orange'>งานที่ 1 กฤษฎากร อินทร์ดี BIT.2/4 เลขที่ 34</h1>"; 
    ?>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEUB8TrV6WdePo3cLjg1F-ylKtBTFw6omD5w&s" alt="" width="300" height="200">
    <br><br>

    <form action="index.php" method="GET">
        <label id="num">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" required>
        <input type="submit" value="คำนวณ">
    </form>
    <br>

    <?php
        if(isset($_GET["num"])){

            $num = $_GET["num"];

            echo "<h3>สูตรคูณแม่ " . $num . "</h3>";
            
            // เริ่มต้น While Loop
            $i = 1; 
            while($i <= 12){ 
                echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                $i++; 
            }
        }
    ?>

</body>
</html>
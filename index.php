<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; background-image: url('https://yt3.googleusercontent.com/Yh_OwS9ULso6ct27p691VXNA727Egt45wLuL_G4W7bKA_IERsmw1RSYFx7TIFnviGbAB1Qym_A=s900-c-k-c0x00ffffff-no-rj'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; background-position: center;">
    
    <?php
        echo "<h1 style='color:orange'>งานที่ 1 กฤษฎากร อินทร์ดี BIT.2/4 เลขที่ 34</h1>"; 
    ?>
    
    <br><br>
     <a href="https://www.tiktok.com/@johndkp/video/7647853305456020757?is_from_webapp=1&sender_device=pc" target="_blank" style="color: #EE1D52; font-size: 100px; text-decoration: none; margin-left: 20px;">JOHN DKP</a>
<br><br>
    <a href="while.php" style="color: blue; font-size: 20px; text-decoration: none;"> Aom Loop</a>
    <br><br>
    

    <form action="">
        <label id="num" style="color: green; font-size: 22px; text-decoration: none;">เลขแม่สูตรคูณ</label> <br> <br>
        
        <input type="number" name="num" id="" style="font-size: 24px;">
        
        <input type="submit" value="คำนวณ" style="color: red; font-size: 20px; text-decoration: none; margin-left: 20px;">
    </form>
    <br><br>

    <?php
        if(isset($_GET["num"])){

            $num = $_GET["num"];

            // หัวข้อสูตรคูณ
            echo "<span style='color: darkred; font-weight: bold; font-size: 26px; display: inline-block;'>สูตรคูณแม่ " . $num . "</span><br><br>";
            
            // ตารางขนาดใหญ่ (กว้าง 350px) อยู่ตรงกลางหน้าจอ
            echo "<table border='1' cellpadding='12' style='font-size: 24px; border-collapse: collapse; margin-left: auto; margin-right: auto; width: 350px;'>";
            
            for($i = 1;  $i <= 12; $i++){
                echo "<tr>";
                echo "<td style='text-align: center; color: cyan; padding: 10px;'> " . $num . " x " . $i . "</td>";
                echo "<td style='font-weight: bold; color: green; text-align: center; padding: 10px;'> = </td>";
                echo "<td style='font-weight: bold;color: yellow; text-align: center; padding: 10px;'>" . ($num * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>

   
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
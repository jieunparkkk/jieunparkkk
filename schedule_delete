<?php 
    $con = mysqli_connect("localhost","wldms","1234","sungkyul");
    $b1_d = $_POST["b1"];

    $sql = "DELETE FROM schedule WHERE schedule_code=$b1_d";
    mysqli_query($con, $sql);

    $sql = "SELECT * FROM schedule";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        echo $row['schedule_code']." ";
        echo $row['date']." ";
        echo $row['time']." ";
        echo $row['title']."<br>";
     
    }
    print "<br><a href='schedule.html'>메인 화면으로</a>";
 ?>

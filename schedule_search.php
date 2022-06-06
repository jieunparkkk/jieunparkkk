<?php

    $con = mysqli_connect("localhost","wldms","1234","sungkyul");
    $c1_d = $_POST["c1"];
    $sql = "SELECT * FROM schedule WHERE title like '%$c1_d%'";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['date'].".  ";
        echo $row['time']."<br>";
        echo $row['title'];
     
    }

    print "<br><a href='schedule.html'>메인 화면으로</a>";
?>

<?php 

	$con = mysqli_connect("localhost","wldms","1234","sungkyul");
	$sql = "SELECT * FROM schedule"; 
    $result = mysqli_query($con, $sql);
        
    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['schedule_code'].".  "."날짜 :  ".$row['date'].". "."시간 : ".$row['time']."<br>";
        echo $row['title']."<br>";
        echo "----------------------------------------------- <br>";
     
    }
	
    print "<br><a href='schedule.html'>메인 화면으로</a>";

?>

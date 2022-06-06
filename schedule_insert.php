<?php
	$con = mysqli_connect("localhost","wldms","1234","sungkyul");
	$date = $_POST['a1'];
	$date = addslashes($date);
    $time = $_POST['a2'];
    $time = addslashes($time);
    $title = $_POST['a3'];
    $title = addslashes($title);
    

	$sql = "insert into schedule (
			date,
			time,
			title
	)";
	
	$sql = $sql. "values (
			'$date',
			'$time',
			'$title'
	)";

	if($con->query($sql)){ 
	  echo '<script>alert("success inserting")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "schedule.html";
</script>

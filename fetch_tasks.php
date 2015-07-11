<?php
session_start();
require('db_connect.php');
$user_id=$_SESSION['user_id'];
$project=mysqli_fetch_array(mysqli_query($con,"select * from project where partner_id=".$user_id)) or die(mysqli_error());
$activity_project=mysqli_query($con,"select activity_id,completion from activity_project where project_id=".$project['project_id']);
while($activity_arr=mysqli_fetch_array($activity_project))
{

	$taskname=mysqli_fetch_array(mysqli_query($con,"select activity_name from activities where activity_id=".$activity_arr['activity_id']));
	echo "<h3>".$taskname['activity_name']."</h3>";
	echo "<div class='progress progress-striped active'>
                            <div class='progress-bar progress-bar-warning' style='width: ".$activity_arr['completion']."%;'>".$activity_arr['completion']."%</div>
                        </div>";
}
?>

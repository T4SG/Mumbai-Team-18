
<?php

require('db_connect.php');
$user_id=@$_SESSION['user_id'];
// Create connection

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$a1="SELECT activity_project.project_id FROM activity_project,project where activity_project.project_id=project.project_id && completion=100";
$resulta1=$con->query($a1);
if($resulta1->num_rows==18)

{

$row=mysqli_fetch_assoc($resulta1);
$pid=$row['project_id'];
$sql="SELECT project_name,end_date FROM project where project_id='$pid'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
			echo '<div class="mt">
                    <table id="datatable-table" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th class="no-sort hidden-xs">End Date</th>
                           
                        </tr>
                        </thead>';
    while($row =mysqli_fetch_assoc($result))
    {
		
                    echo '<tbody>
                        <tr style="color:black;">
                            
                            <td ><span class="fw-semi-bold">'.$row['project_name'].'</span></td>
                            <td class="hidden-xs">
                                
                                    <span class="fw-semi-bold">'.$row['end_date'].'</span>
                            </td></tr>';
		 
    }
	
	echo '</tbody></table>';
}
	} else {
    echo "0 results";
}
$con->close();
?>

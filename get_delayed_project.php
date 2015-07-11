
<?php

require('db_connect.php');
$user_id=@$_SESSION['user_id'];
// Create connection

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "SELECT project_name,delay_reason FROM project where delay_reason!=''";
$result = $con->query($sql);


if ($result->num_rows > 0) {
			echo '<div class="mt">
                    <table id="datatable-table" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th class="no-sort hidden-xs">Reason for delay</th>
                           
                        </tr>
                        </thead>';
    while($row =mysqli_fetch_assoc($result))
    {
		
                    echo '<tbody>
                        <tr style="color:black;">
                            
                            <td ><span class="fw-semi-bold">'.$row['project_name'].'</span></td>
                            <td class="hidden-xs">
                                
                                    <span class="fw-semi-bold">'.$row['delay_reason'].'</span>
                            </td></tr>';
		 
    }
	
	echo '</tbody></table>';
} else {
    echo "0 results";
}
$con->close();
?>

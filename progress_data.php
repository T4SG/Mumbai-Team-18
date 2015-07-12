
<?php

require('db_connect.php');
$user_id=$_SESSION['user_id'];
// Create connection

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


$sql = "SELECT * FROM projects";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    
    while($row =mysqli_fetch_assoc($result))
    {
    
      echo "hello";
             //   echo $row["name"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<?php

								/*<tr>
                                <td class='hidden-xs'>".$rows['project_id']."</td>
                                <td>
                                    <img class='img-rounded' src='img/jpeg/11.jpg' alt='' height='50'>
                                </td>
                                <td>"
                                    .$rows['project_name'].
                                "</td>
                                <td class='hidden-xs'>
                                    ".$rows['location']."
                                </td>
                                <td class='hidden-xs text-muted'>
                                    ".$rows['start_date']."
                                </td>
                                <td class='hidden-xs text-muted'>
                                    ".$row['end_date']."
                                </td>
                                <td class='width-150'>
                                    <div class='progress progress-sm mt-xs js-progress-animate'>
                                        <div class='progress-bar' data-width='41%' style='width: 41%;'></div>
                                    </div>
                                </td>
                            </tr>*/

?>
<?php

include('database.php'); 
$searchTerm = $_GET['term'];
$sql = "SELECT * FROM table_college WHERE name LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $collegeData = array(); 
  while($row = $result->fetch_assoc()) {
   $data['id']    = $row['id']; 
   $data['value'] = $row['name'];
   array_push($collegeData, $data);
} 
}
 echo json_encode($collegeData);


?>
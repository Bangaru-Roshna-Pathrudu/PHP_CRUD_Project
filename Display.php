<?php include 'Connection.php';?>
<?php

$sql = "SELECT mname,mrating FROM movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " , $row["mname"], " - rating: " , $row["mrating"],  "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

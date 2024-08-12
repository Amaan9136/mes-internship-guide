<?php
  $conn = mysqli_connect("localhost","root","","mydb");
  if($conn){
    echo "Connection Success!<br>";
  }

  $sql = "SELECT * FROM `register`;";

  $result = mysqli_query($conn, $sql);

  // {
  //   [],
  //   [],
  //   [],
  //   []
  // }

  while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"]  ;
  }
?>
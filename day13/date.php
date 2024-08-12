<?php
  echo date_default_timezone_get();
  date_default_timezone_set('Asia/Kolkata');
  echo date_default_timezone_get();
  $date = date("y/d/m h/i/s");
  echo $date;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    include 'warning.php';

    $storage_no = $_POST['storage_no'];
    $tracking_no = $_POST['tracking_no'];

    function random_strings($length_of_string){
      $str_result = '0123456789';
      return substr(str_shuffle($str_result), 0 , $length_of_string);
    }

    $num = 30; //number of slots
  
    //$parcel_data = array ($num);
                          /*0 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          1 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          2 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          3 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          4 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          5 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          6 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          7 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          8 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          9 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          10 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          11 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          12 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          13 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          14 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          15 => array(
                            'tracking_no' => random_strings(8),
                            'pin_no' => random_strings(6)),
                          16 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          17 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          18 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          19 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          20 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          21 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          22 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          23 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          24 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          25 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          26 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          27 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          28 => array(
                            'tracking_no' => "",
                            'pin_no' => ""),
                          29 => array(
                            'tracking_no' => "",
                            'pin_no' => ""));*/

  $parcel_data = array(($storage_no-1) => array($tracking_no , random_strings(6)));

  for($i = 0; $i < $num; $i++){
    if (!isset($parcel_data[$i][0])){
      echo "Storage " . ($i+1) . "<br>Slot is empty.";
      echo "<br><br>";
    }
    else{
      echo "Storage = " . ($i+1) . "<br>Tracking No = " . $parcel_data[$i][0] . "<br>Pin No = " . $parcel_data[$i][1];
      echo "<br><br>";
    }
  }
   ?>
   <h4>Countdown:</h4>
   <p id="demo"></p>
   <script>
   // Set the countdown date
   var countDownDate = new Date("Nov 20, 2020 11:00:00").getTime();

   // Update the count down every 1 second
   var x = setInterval(function() {

     // Get today's date and time
     var current = new Date().getTime();

     // Find time left between current and count down date
     var timeleft = countDownDate - current

     // Time calculations for days, hours, minutes and seconds
     var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
     var hrs = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var mins = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
     var secs = Math.floor((timeleft % (1000 * 60)) / 1000);

     // Output the result in an element with id="demo"
     document.getElementById("demo").innerHTML = days + "d " + hrs + "h "
     + mins + "m " + secs + "s ";

     // If the count down is over, write some text
     if (timeleft < 0) {
       clearInterval(x);
       document.getElementById("demo").innerHTML = "Parcel unretrieved";
     }
   }, 1000);
   </script>
   <br><br>
   <a href="parcel_system.html">Homepage</a>
   <br><br>
   <a href="dropoff.html">Add more parcel</a>
   </body>
 </html>

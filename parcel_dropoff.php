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

    $parcel_data = array ($num);
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

    session_start();
    function start(){
      if(!isset($_SESSION['expire']))
        {
          $_SESSION['expire'] = time()+172800;
        }

        $time_remaining = $_SESSION['expire'] - time();

        echo round(abs($time_remaining) / 60, 2) . ' minutes left';

        if($time_remaining < 0){
          echo "parcel unretrieved";
        }
    };
        echo "Storage = " . $storage_no . "<br>Tracking No = " . $tracking_no .
        "<br>Pin No: " . random_strings(6);
        echo "<br><br>";
        start();
   ?>
   <br><br>
   <a href="parcel_system.html">Homepage</a>
   <br><br>
   <a href="dropoff.html">Add more parcel</a>
   </body>
 </html>

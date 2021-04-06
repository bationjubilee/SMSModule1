<?php
  //########################################################################################
  //ITEXMO CUSTOM RECEIVED SMS API VERSION 1.2 #############################################
  //########################################################################################
  //IMPORTANT: Create a database with the folowing exact coloumn name:
  // -> "originator" -> Varchar with 15 characters atleast - > SMS Originator number
  // -> "gateway" -> Varchar with 15 characters atleast - > SMS Server Number
  // -> "message"    -> Varchar with 480 characters atleast -> SMS Content
  // -> "timestamp"  -> Varchar with 50 characters atleast -> SMS SERVER TimeStamp        
  //########################################################################################
  //########################################################################################

###############-----SMS DATA HERE------############################
// $sms_data = file_get_contents('https://www.itexmo.com/php_api/display_messages.php?apicode=DE-JUBIL430719_XQR53');
// $response_data = json_decode($sms_data, true);
// //echo $sms_data;
// //$a =  $sms_data['originator'];\

// print_r($sms_data);
//print_r($response_data);
//echo $response_data;

//var_dump($response_data);

// create a new cURL resource
// $ch = curl_init();

// // set URL and other appropriate options
// curl_setopt($ch, CURLOPT_URL, "https://www.itexmo.com/php_api/display_messages.php?apicode=DE-JUBIL430719_XQR53");
// curl_setopt($ch, CURLOPT_HEADER, 0);

// // grab URL and pass it to the browser
// curl_exec($ch);

// // close cURL resource, and free up system resources
// curl_close($ch);

// $result = file_get_contents('https://www.itexmo.com/php_api/display_messages.php?apicode=DE-JUBIL430719_XQR53');
// $array = json_decode($result, true);
// var_dump($array);
$a = "";
$b = "";
$c = "";
$arr1 = array();
$arr2 = array();
$arr3 = array();
$JSON = file_get_contents('https://www.itexmo.com/php_api/display_messages.php?apicode=DE-JUBIL430719_XQR53');
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($JSON, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(!is_array($val)) {
        if($key == "message_id") {
            print "<br/>";
            array_push($arr1, $val);
            
            
        }

        if($key == "originator") {
            //print "<br/>";
            array_push($arr2, $val);
            
            
        }

        if($key == "message") {
            //print "<br/>";
            array_push($arr3, $val);
            
        }

    print $key."    : ".$val . "<br/>";

    }
    
    
}
print "<br/>";
var_dump($arr1)
print "<br/>";
var_dump($arr2);
print "<br/>";
var_dump($arr3);
// foreach ($arr1 as $key) {
//    print "<br/>";
//    print($key);
//   foreach ($arr2 as $key) {
//      print "<br/>";
//      print($key);
//     foreach ($arr3 as $key) {
//        print "<br/>";
//        print($key);
//     }
//   }
// }






// foreach ($arr2 as $key) {
//   print "<br/>";
//   print($key);
// }
// foreach ($arr3 as $key) {
//   print "<br/>";
//   print($key);
// }

################################################################
  //Insert your database information here...
  //########################################################################################
  $a = 'localhost'; //Database address eg. localhost
  $b = 'root'; //Database username with insert permissions
  $c = ''; //Database password
  $d = 'sms_module'; //Database Name
  $f = 'sms_data'; //Table Name
  //########################################################################################
  //########################################################################################
  //Do not edit below codes unless you know what you are doing.
  //########################################################################################
  function getSave($originator,$gateway,$message,$timestamp) 
  {
    $conn = new mysqli($a, $b, $c);
   if ($conn->connect_error) {die("ERROR");}     
   //Variables from itexmo's server calls
   $originator = $originator; 
   $gateway = $gateway; 
   $message = $message; 
   $timestamp = $timestamp; 
   //Escapes
   $gateway = mysqli_real_escape_string($conn,$gateway);
   $originator = mysqli_real_escape_string($conn,$originator);
   $message = mysqli_real_escape_string($conn,$message);
   $timestamp = mysqli_real_escape_string($conn,$timestamp);
   //Query
   $sql = "INSERT INTO `$d`.`$f` (`gateway`,`originator`,`message`,`timestamp`) VALUES ('$gateway','$originator','$message','$timestamp')  ";
   if ($conn->query($sql) === TRUE) {echo "SUCCESS";    }else{echo "ERROR";}
   $conn->close();
  }
  // $conn = new mysqli($a, $b, $c);
  // if ($conn->connect_error) {die("ERROR");}     
  // //Variables from itexmo's server calls
  // $originator = ""; if(isset($_POST['originator'])){ $originator = $_POST['originator']; }
  // $gateway = ""; if(isset($_POST['gateway'])){ $gateway = $_POST['gateway']; }
  // $message = ""; if(isset($_POST['message'])){ $message = $_POST['message']; }
  // $timestamp = ""; if(isset($_POST['timestamp'])){ $timestamp = $_POST['timestamp']; }
  // //Escapes
  // $gateway = mysqli_real_escape_string($conn,$gateway);
  // $originator = mysqli_real_escape_string($conn,$originator);
  // $message = mysqli_real_escape_string($conn,$message);
  // $timestamp = mysqli_real_escape_string($conn,$timestamp);
  // //Query
  // $sql = "INSERT INTO `$d`.`$f` (`gateway`,`originator`,`message`,`timestamp`) VALUES ('$gateway','$originator','$message','$timestamp')  ";
  // if ($conn->query($sql) === TRUE) {echo "SUCCESS";    }else{echo "ERROR";}
  // $conn->close();
  //########################################################################################
  //########################################################################################
?>







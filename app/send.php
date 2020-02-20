<?php
$my_apikey = "WQIEEF4S9YRHIKOLBH5B";
$destination = "916281400291";
// $message = "sending...";
$input = $_POST['inputText'];
$api_url = "http://panel.rapiwha.com/send_message.php";
$api_url .= "?apikey=". urlencode ($my_apikey);
$api_url .= "&number=". urlencode ($destination);
$api_url .= "&text=". urlencode ($input);
$my_result_object = json_decode(file_get_contents($api_url, false));
// echo "<br>Result: ". $my_result_object->success;
// echo "<br>Description: ". $my_result_object->description;
// echo "<br>Code: ". $my_result_object->result_code;
?>

<?php
// $my_apikey = "TU4EPNP1FL1B9ZY5LJF1";
// $destination = "919603263741";
// $message = "MESSAGE TO SEND";
// $api_url = "http://panel.rapiwha.com/send_message.php";
// $api_url .= "?apikey=". urlencode ($my_apikey);
// $api_url .= "&number=". urlencode ($destination);
// $api_url .= "&text=". urlencode ($message);
// $my_result_object = json_decode(file_get_contents($api_url, false));
// echo "<br>Result: ". $my_result_object->success;
// echo "<br>Description: ". $my_result_object->description;
// echo "<br>Code: ". $my_result_object->result_code;

// Pull messages (for push messages please go to settings of the number)
// $my_apikey = "TU4EPNP1FL1B9ZY5LJF1";
// $number = "919603263741";
// $type = "OUT";
// $typein = "IN";
// $markaspulled = "0";
// $getnotpulledonly = "0";
// $api_url  = "http://panel.rapiwha.com/get_messages.php";
// $api_url .= "?apikey=". urlencode ($my_apikey);
// $api_url .= "&number=". urlencode ($number);
// $api_url .= "&type=". urlencode ($type);
// $api_url .= "&markaspulled=". urlencode ($markaspulled);
// $api_url .= "&getnotpulledonly=". urlencode ($getnotpulledonly);
// $my_json_result = file_get_contents($api_url, false);
// $my_php_arr = json_decode($my_json_result);
// foreach($my_php_arr as $item)
// {
//   $from_temp = $item->from;
//   $to_temp = $item->to;
//   $text_temp = $item->text;
//   $type_temp = $item->type;
//   $creation_date = $item->creation_date;
//   echo "<br>". $creation_date ." -> ". $from_temp ." -> ". $to_temp ." (". $type_temp ."): ". $text_temp;
//   // Do something
// }
// $api_urlin  = "http://panel.rapiwha.com/get_messages.php";
// $api_urlin .= "?apikey=". urlencode ($my_apikey);
// $api_urlin .= "&number=". urlencode ($number);
// $api_urlin .= "&type=". urlencode ($typein);
// $api_urlin .= "&markaspulled=". urlencode ($markaspulled);
// $api_urlin .= "&getnotpulledonly=". urlencode ($getnotpulledonly);
// $my_json_resultin = file_get_contents($api_urlin, false);
// $my_php_arrin = json_decode($my_json_resultin);
// foreach($my_php_arrin as $item)
// {
//   $from_temp = $item->from;
//   $to_temp = $item->to;
//   $text_temp = $item->text;
//   $type_temp = $item->type;
//   echo "<br>". $from_temp ." -> ". $to_temp ." (". $type_temp ."): ". $text_temp;
//   // Do something
// }
?>
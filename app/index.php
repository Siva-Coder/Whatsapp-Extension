
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Popup Chat Window</h2>
<?php
$message = "";
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$input;


  $my_apikey = "WQIEEF4S9YRHIKOLBH5B";
  $destination = "916281400291";
//   $message = "sending...";
  $api_url = "http://panel.rapiwha.com/send_message.php";
  $api_url .= "?apikey=". urlencode ($my_apikey);
  $api_url .= "&number=". urlencode ($destination);
  $api_url .= "&text=". urlencode ($input);
  $my_result_object = json_decode(file_get_contents($api_url, false));



//   $my_apikey = "TU4EPNP1FL1B9ZY5LJF1";
//   $number = "919603263741";
//   $type = "OUT";
//   $typein = "IN";
//   $markaspulled = "0";
//   $getnotpulledonly = "0";
//   $api_url  = "http://panel.rapiwha.com/get_messages.php";
//   $api_url .= "?apikey=". urlencode ($my_apikey);
//   $api_url .= "&number=". urlencode ($number);
//   $api_url .= "&type=". urlencode ($type);
//   $api_url .= "&markaspulled=". urlencode ($markaspulled);
//   $api_url .= "&getnotpulledonly=". urlencode ($getnotpulledonly);
//   $my_json_result = file_get_contents($api_url, false);
//   $my_php_arr = json_decode($my_json_result);
//   foreach($my_php_arr as $item)
//   {
//     $from_temp = $item->from;
//     $to_temp = $item->to;
//     $text_temp = $item->text;
//     $type_temp = $item->type;
//     $creation_date = $item->creation_date;
//     echo "<br>". $creation_date ." -> ". $from_temp ." -> ". $to_temp ." (". $type_temp ."): ". $text_temp;
//     // Do something
//   }

}    
?>

<script>
// setInterval(function(){
//    <?php
   
//  $my_apikey = "TU4EPNP1FL1B9ZY5LJF1";
//  $number = "919603263741";
//  $type = "IN";
//  $markaspulled = "0";
//  $getnotpulledonly = "0";
//  $api_url  = "http://panel.rapiwha.com/get_messages.php";
//  $api_url .= "?apikey=". urlencode ($my_apikey);
//  $api_url .= "&number=". urlencode ($number);
//  $api_url .= "&type=". urlencode ($type);
//  $api_url .= "&markaspulled=". urlencode ($markaspulled);
//  $api_url .= "&getnotpulledonly=". urlencode ($getnotpulledonly);
//  $my_json_result = file_get_contents($api_url, false);
//  $my_php_arr = json_decode($my_json_result);
//  foreach($my_php_arr as $item)
//  {
//    $from_temp = $item->from;
//    $to_temp = $item->to;
//    $text_temp = $item->text;
//    $type_temp = $item->type;
//    $creation_date = $item->creation_date;
//    echo "<br>". $creation_date ." -> ". $from_temp ." -> ". $to_temp ." (". $type_temp ."): ". $text_temp;
//    echo "<script>console.log(".$text_temp.")</script>";
//    // Do something
//  }
//    ?>
//     },1000);  
</script>


<?php 
echo "<h1>".$message."</h1>";
// foreach($my_php_arr as $item)
// {
//   $from_temp = $item->from;
//   $to_temp = $item->to;
//   $text_temp = $item->text;
//   $type_temp = $item->type;
//   $creation_date = $item->creation_date;
//   echo "<h5>". $creation_date ." -> ". $text_temp."</h5>";
//   // Do something
// }
?>
<br>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="" method="POST" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="inputText" required></textarea>

    <button type="submit" class="btn" name="SubmitButton">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

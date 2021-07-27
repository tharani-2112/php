<?php
  $url = "https://www.google.com/";
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec($ch);  
  echo $result; 
  if(curl_errno($ch))
  {
      echo 'Curl error: ' . curl_error($ch);
  }
  else{
      echo 'no error';
  }
  echo "<br>"
  ?>
  <?php
// Create a curl handle to a non-existing location
$ch = curl_init('http://404.php.net/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
    echo 'Operation completed without any errors';
}

// Close handle
curl_close($ch);
?>
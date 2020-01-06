<?php
  
  header('Content-type: application/json');
  
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.patreon.com/stream?json-api-version=1.0&amp;fields[post]=post_type%2Ctitle%2Ccontent%2Cthumbnail_url%2Cpublished_at%2Curl&amp;fields[user]=image_url%2Cfull_name%2Curl&amp;filter[is_by_creator]=true&amp;filter[is_following]=false&amp;filter[creator_id]=19656069&amp;filter[contains_exclusive_posts]=true&amp;page[cursor]=null',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie:'
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo 'cURL Error #:' . $err;
} else {
  echo $response;
} 
?>

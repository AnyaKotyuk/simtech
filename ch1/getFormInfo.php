<?php
/**
 * Created by PhpStorm.
 * User: Anya
 * Date: 15.03.2017
 * Time: 21:19
**/

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$facebook_url = str_replace('facebook.org', 'facebook.com', trim($_REQUEST['facebook_url']));
$twitter_id = trim($_REQUEST['twitter_id']);
$fb_pos = strpos($facebook_url, "facebook.com");

if($fb_pos === false){
    $facebook_url = 'http://facebook.com/'.$facebook_url;
}
$twitter_url = 'https://twitter.com/';
$tw_pos = strpos($twitter_id, '@');
if($tw_pos === false){
    $twitter_url .= $twitter_id;
}else{
    $twitter_url .= substr($twitter_id, $tw_pos + 1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chapter 1</title>
    <link href="/css/phpMM.css" rel="stylesheet" type="text/css">
</head>
<body class="ch1">
<h1>Your information:</h1>

<p>Name: <?=$first_name." ".$last_name;?></p>
<p>E-mail: <?=$email;?></p>
<p>Facebook url: <a href="<?=$facebook_url;?>"><?=$facebook_url;?></a></p>
<p>Twitter url: <a href="<?=$twitter_url;?>"><?=$twitter_id;?></a></p>
</body>
</html>
